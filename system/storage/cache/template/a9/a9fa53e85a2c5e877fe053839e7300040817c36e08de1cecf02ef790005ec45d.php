<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/column_left.twig */
class __TwigTemplate_f3171bfd7e180989f34ff41bdc89a48080d3cc498ed67fd4ddeb112a1c670edd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["modules"] ?? null)) {
            // line 2
            echo "    <aside id=\"column-left\" class=\"col-sm-3 hidden-xs\">
        <div class=\"sidebar-modules\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "                <div class=\"sidebar-module-wrapper\">
                    ";
                // line 6
                echo $context["module"];
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    </aside>

    <style>
        /* Стили для сайдбара */
        .sidebar-modules {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .sidebar-module-wrapper {
            width: 100%;
        }

        /* Стили для категорий в сайдбаре */
        .sidebar-module-wrapper .row {
            margin: 0 !important;
            display: block !important;
        }

        .sidebar-module-wrapper .category-layout {
            width: 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
            margin-bottom: 10px !important;
            padding: 0 !important;
        }

        .sidebar-module-wrapper .category-thumb {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px;
            display: flex;
            align-items: flex-start;
            text-align: left;
            transition: all 0.3s ease;
            background: #fff;
            width: 100%;
            margin-bottom: 0 !important;
        }

        .sidebar-module-wrapper .category-thumb:hover {
            border-color: #337ab7;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .sidebar-module-wrapper .category-image {
            margin-right: 12px;
            flex-shrink: 0;
            width: 40px;
            margin-bottom: 0 !important;
        }

        .sidebar-module-wrapper .category-image img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            border-radius: 4px;
            background: #f8f9fa;
            padding: 2px;
        }

        .sidebar-module-wrapper .category-caption {
            flex-grow: 1;
            min-width: 0;
        }

        .sidebar-module-wrapper .category-caption h4 {
            margin-bottom: 8px !important;
            font-size: 14px !important;
            font-weight: bold;
        }

        .sidebar-module-wrapper .category-caption h4 a {
            color: #333;
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            font-size: 14px !important;
            transition: color 0.3s ease;
        }

        .sidebar-module-wrapper .category-caption h4 a:hover {
            color: #337ab7;
        }

        .sidebar-module-wrapper .category-children {
            margin-bottom: 0 !important;
        }

        .sidebar-module-wrapper .child-category {
            display: flex;
            align-items: center;
            padding: 4px 0 !important;
            text-decoration: none;
            color: #666;
            font-size: 12px !important;
            transition: all 0.2s ease;
        }

        .sidebar-module-wrapper .child-category:hover {
            color: #337ab7;
            background-color: #f9f9f9;
            padding-left: 5px !important;
            padding-right: 5px !important;
            margin: 0 -5px !important;
            border-radius: 3px;
        }

        .sidebar-module-wrapper .child-image {
            width: 16px !important;
            height: 16px !important;
            object-fit: contain;
            margin-right: 6px !important;
            flex-shrink: 0;
            background: #fff;
            padding: 1px;
            border: 1px solid #eee;
            border-radius: 2px;
        }

        .sidebar-module-wrapper .child-name {
            font-size: 11px !important;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            flex-grow: 1;
        }

        .sidebar-module-wrapper .more-children {
            padding-top: 4px !important;
        }

        .sidebar-module-wrapper .more-children a {
            color: #999;
            font-size: 10px !important;
            text-decoration: none;
            font-style: italic;
        }

        /* Убираем сеточные классы внутри сайдбара */
        .sidebar-module-wrapper .col-lg-4,
        .sidebar-module-wrapper .col-md-4,
        .sidebar-module-wrapper .col-sm-6,
        .sidebar-module-wrapper .col-xs-12 {
            width: 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
            float: none !important;
        }

        /* Убираем ряды и колонки */
        .sidebar-module-wrapper .row {
            display: block !important;
        }

        .sidebar-module-wrapper [class*=\"col-\"] {
            width: 100% !important;
            float: none !important;
        }

        /* Адаптивность для очень маленьких экранов */
        @media (max-width: 380px) {
            .sidebar-module-wrapper .category-thumb {
                padding: 10px !important;
            }

            .sidebar-module-wrapper .category-image {
                width: 35px !important;
                margin-right: 10px !important;
            }

            .sidebar-module-wrapper .category-image img {
                width: 35px !important;
                height: 35px !important;
            }

            .sidebar-module-wrapper .category-caption h4 {
                font-size: 13px !important;
            }

            .sidebar-module-wrapper .category-caption h4 a {
                font-size: 13px !important;
            }
        }

        /* Стили для активной категории в сайдбаре */
        .sidebar-module-wrapper .category-thumb.active,
        .sidebar-module-wrapper .category-thumb.active-category {
            border-color: #fb6969ed !important;
            background-color: #fb6969ed !important;
            box-shadow: 0 4px 12px rgba(251, 105, 105, 0.3) !important;
        }

        .sidebar-module-wrapper .category-thumb.active .category-caption h4 a,
        .sidebar-module-wrapper .category-thumb.active-category .category-caption h4 a {
            color: #ffffff !important;
        }

        .sidebar-module-wrapper .category-thumb.active .category-image img,
        .sidebar-module-wrapper .category-thumb.active-category .category-image img {
            background: rgba(255, 255, 255, 0.2) !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
        }

        /* Стили для активных дочерних категорий */
        .sidebar-module-wrapper .child-category.active {
            background-color: #fb6969ed !important;
            color: #ffffff !important;
            border-radius: 4px;
            padding-left: 8px !important;
            padding-right: 8px !important;
            margin: 2px -8px !important;
        }

        .sidebar-module-wrapper .child-category.active .child-image {
            background: rgba(255, 255, 255, 0.3) !important;
            border-color: rgba(255, 255, 255, 0.5) !important;
        }

        .sidebar-module-wrapper .child-category.active .child-name {
            color: #ffffff !important;
            font-weight: 500;
        }
    </style>

    <script>
        // JavaScript для автоматического определения активных категорий
        document.addEventListener('DOMContentLoaded', function() {
            function highlightActiveCategories() {
                // Получаем текущий URL
                const currentUrl = window.location.href;

                // Находим все ссылки категорий в сайдбаре
                const categoryLinks = document.querySelectorAll('#column-left .category-caption h4 a');
                const childCategoryLinks = document.querySelectorAll('#column-left .child-category');

                // Сбрасываем предыдущие активные состояния
                document.querySelectorAll('#column-left .category-thumb.active, #column-left .category-thumb.active-category').forEach(el => {
                    el.classList.remove('active', 'active-category');
                });
                document.querySelectorAll('#column-left .child-category.active').forEach(el => {
                    el.classList.remove('active');
                });

                // Проверяем каждую категорию
                categoryLinks.forEach(link => {
                    const categoryThumb = link.closest('.category-thumb');
                    if (currentUrl.includes(link.getAttribute('href'))) {
                        categoryThumb.classList.add('active-category');
                    }
                });

                // Проверяем дочерние категории
                childCategoryLinks.forEach(link => {
                    if (currentUrl.includes(link.getAttribute('href'))) {
                        link.classList.add('active');
                        // Также подсвечиваем родительскую категорию
                        const parentThumb = link.closest('.category-thumb');
                        if (parentThumb) {
                            parentThumb.classList.add('active-category');
                        }
                    }
                });

                // Если есть параметр path в URL, подсвечиваем соответствующие категории
                const urlParams = new URLSearchParams(window.location.search);
                const pathParam = urlParams.get('path');
                if (pathParam) {
                    const pathIds = pathParam.split('_');

                    categoryLinks.forEach(link => {
                        const href = link.getAttribute('href');
                        if (href && href.includes('path=')) {
                            const match = href.match(/path=([^&]*)/);
                            if (match) {
                                const categoryPath = match[1];
                                if (pathIds.includes(categoryPath) || categoryPath.includes(pathIds[0])) {
                                    const categoryThumb = link.closest('.category-thumb');
                                    categoryThumb.classList.add('active-category');
                                }
                            }
                        }
                    });
                }
            }

            // Запускаем при загрузке
            highlightActiveCategories();

            // Обновляем при изменении URL (для AJAX навигации)
            let currentUrl = window.location.href;
            setInterval(() => {
                if (window.location.href !== currentUrl) {
                    currentUrl = window.location.href;
                    highlightActiveCategories();
                }
            }, 500);
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/column_left.twig", "");
    }
}
