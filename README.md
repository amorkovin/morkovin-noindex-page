# morkovin-noindex-page или Морковный ноиндекс для пагинации

Плагин закрывает от индексации внутренние пагинационные страницы сайта на WordPress.

Это очень простой плагин, выводящий в head пагинационных страниц тег &#60;meta name="robots" content="noindex,follow"&#62;.

Под пагинационными страницами понимается следующее. Если перейти на страницу рубрики (на главную, в метки, любое место, где есть следующие страницы) и нажать ссылку для перехода на страницу 2, 3… то загрузится вторая, третья и т.д. страницы — как раз эти страницы и закрыты от индексации данным плагином.

UPD 12.01.2019. В нашем техническом чате (https://t.me/joinchat/C0tGDUHLIuSlflhc8SrTzw) мне дали правильный совет. Нужно вместо &#60;meta name="robots" content="noindex,follow"/&#62; выводить &#60;meta name="yandex" content="noindex,follow"/&#62;, т.к. проблема индексации внутренних пагинационных страниц возникает только у Яндекса (Гугл отлично понимает теги rel="next" и rel="prev", а Яндекс почему-то эти теги игнорирует).

В версии 1.3 я вывожу &#60;meta name="yandex" content="noindex,follow"/&#62; на внутренних пагинационных страницах архивов и главной.

Результат для Яндекса: http://joxi.ru/52aJgXnIEbKbvA.

Т.е., на сколько я понимаю, наступил полный фен-шуй и теперь все очень по красоте. Спасибо за совет, Сергей!
