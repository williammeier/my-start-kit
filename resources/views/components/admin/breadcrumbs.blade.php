@php
    $currentRoute = Route::currentRouteName();
    $routeParts = explode('.', $currentRoute);
    $area = $routeParts[0] ?? '';

    // Get current route parameters
    $routeParams = Route::current()->parameters();

    $breadcrumbs = [];

    // Start with Início
    $breadcrumbs[] = [
        'label' => 'Início',
        'link' => route('admin.index'),
        'icon' => 'o-home',
    ];

    $currentSegment = '';
    $lastIndex = count($routeParts) - 1;
    $lastSegment = $routeParts[$lastIndex];

    foreach ($routeParts as $index => $segment) {
        // Skip 'admin' area and 'show'
        if ($index === 0 || $segment === 'show') {
            continue;
        }

        $currentSegment = $currentSegment ? "{$currentSegment}.{$segment}" : $segment;

        // If the last segment is 'index', do not link the previous segment
        if ($lastSegment === 'index' && $index === $lastIndex - 1) {
            $label = config("breadcrumbs.{$segment}", ucfirst($segment));
            $breadcrumbs[] = [
                'label' => $label,
                'link' => null,
            ];
            continue;
        }

        // Handle special cases for the last segment
        if ($index === $lastIndex) {
            if ($segment === 'index') {
                continue;
            } elseif ($segment === 'create') {
                $breadcrumbs[] = [
                    'label' => 'Novo',
                    'link' => null,
                ];
                continue;
            } elseif ($segment === 'edit') {
                $breadcrumbs[] = [
                    'label' => 'Editar',
                    'link' => null,
                ];
                // If there is another segment after 'edit', add it as a link
                if (isset($routeParts[$index + 1])) {
                    $nextSegment = $routeParts[$index + 1];
                    $label = config("breadcrumbs.{$nextSegment}", ucfirst($nextSegment));
                    try {
                        $url = route(
                            "{$area}.{$currentSegment}.{$nextSegment}.index",
                            $routeParams,
                        );
                    } catch (\Exception $e) {
                        $url = null;
                    }
                    $breadcrumbs[] = [
                        'label' => $label,
                        'link' => $url,
                    ];
                }
                continue;
            } else {
                // For other last segments (like 'gallery'), add as breadcrumb
                $label = config("breadcrumbs.{$segment}", ucfirst($segment));
                $breadcrumbs[] = [
                    'label' => $label,
                    'link' => null,
                ];
                continue;
            }
        }

        // For regular segments (not last or special)
        if (!in_array($segment, ['index', 'create', 'edit', 'show']) && $index !== $lastIndex) {
            $label = config("breadcrumbs.{$segment}", ucfirst($segment));
            // Only add link if not the segment before last when last is 'index'
            if (!($lastSegment === 'index' && $index === $lastIndex - 1)) {
                try {
                    $url = route("{$area}.{$currentSegment}.index");
                } catch (\Exception $e) {
                    $url = null;
                }
            } else {
                $url = null;
            }
            $breadcrumbs[] = [
                'label' => $label,
                'link' => $url,
            ];
        }
    }
@endphp
<x-breadcrumbs :items="$breadcrumbs" class="mb-5" separator-class="text-warning" />
