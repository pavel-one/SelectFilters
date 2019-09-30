## SelectFilters

Компонент создан для того, чтобы пользователь мог выбрать самостоятельно какие фильтры для mFilter2 выводить.

### Использование

Перед вызовом mFilter2 вызываем сниппет **SelectFilters**
```
{set $filters = '!SelectFilters' | snippet: [
    'default' => [
        'ms|price:number,ms|vendor:vendors'
    ]
]}
```
В свойстве **default** указываем статические фильтры которые не относятся к опциям

В сниппете **mFilter2** в параметре filters указываем нашу переменную

```
'filters' => $filters
```