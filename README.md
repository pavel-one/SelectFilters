## SelectFilters
https://modx.pro/components/19347  
Компонент создан для того, чтобы пользователь мог выбрать самостоятельно какие фильтры для mFilter2 выводить. Он добавляет чекбокс в окно опций

![Скриншот](http://pavel.one/git_SelectFilters.png)

### Использование

Перед вызовом mFilter2 вызываем сниппет **SelectFilters**
```
{set $filters = '!SelectFilters' | snippet: [
    'default' => [
        'ms|price:number', 'ms|vendor:vendors'
    ]
]}
```
В свойстве **default** указываем статические фильтры которые не относятся к опциям

В сниппете **mFilter2** в параметре filters указываем нашу переменную

```
'filters' => $filters
```

## Сниппет getCaption
Сниппет getCaption достает название опции не из лексиконов (как по умолчанию в минишопе), а из базы данных таблицы msOption.  
Чаще всего это необходимо при автоматическом создании опций, либо если вы не хотите объяснять клиенту как создавать опции в лексиконах

### Использование
Использование сниппета максимально простое: сниппет ждет на вход ключ msOption.   
В **outer** чанка вывода примените модификатор getOption, вот например как это выглядело бы в стандартном чанке **tpl.mFilter2.filter.outer**  
```html
<fieldset id="mse2_{$table}{$delimeter}{$filter}">
    <!-- <h4 class="filter_title">[[%mse2_filter_[[+table]]_[[+filter]]]]</h4> -->
	<h4 class="filter_title">{$filter | getCaption}</h4>
	{$rows}
</fieldset>
```
