<div class="col-sm-9">
    <div class="well well-small"><strong>Добавление поля формы (ID: {$formID}) - {$types[$type]}</strong> <a class="btn btn-success btn-back" href="{$smarty.const.URL}/{$formID}/element">Вернуться к списку елементов</a></div>
    {if isset($error)}<div class="alert alert-error">{$error}</div>{/if}
    {if isset($success)}<div class="alert alert-success">{$success}</div>{/if}
    <form action="{$smarty.server.REQUEST_URI}" method="post" class="form-horizontal form-offset-0" role="form">
        <input type="hidden" name="data[0][type]" value="{$type}" />
        <input type="hidden" name="data[0][formID]" value="{$formID}" />
        <ul class="nav nav-tabs langs">
            {foreach Lang::getLanguages() as $langID => $values}
                <li><a data-toggle="tab" href="#lang{$langID}">{$values.title}</a></li>
                {/foreach}
        </ul>
        <div class="tab-content">
            {foreach Lang::getLanguages() as $langID => $values}
                <div class="tab-pane" id="lang{$langID}">
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-3">
                            <div class="checkbox">
                                <label for="isActive{$langID}">
                                    <input type="checkbox" id="isActive{$langID}" value="1" name="data[{$langID}][isActive]"> Активность
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-3">
                            <div class="checkbox">
                                <label for="isRequired{$langID}">
                                    <input type="checkbox" id="isRequired{$langID}" value="1" name="data[{$langID}][isRequired]"> Обязательное поле
                                </label>
                            </div>
                        </div>
                    </div>
                    {if $type eq 'select'}
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-3">
                                <div class="checkbox">
                                    <label for="isMulty{$langID}">
                                        <input type="checkbox" id="isMulty{$langID}" value="1" name="data[{$langID}][isMulty]"> Множественный выбор
                                    </label>
                                </div>
                            </div>
                        </div>					
                    {/if}
                    <div class="form-group">
                        <label for="title{$langID}" class="col-sm-3 control-label">Название поля</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title{$langID}" name="data[{$langID}][title]" placeholder="Название поля">
                        </div>
                    </div>
                    {if in_array($type, ['text', 'textarea'])}
                        <div class="form-group">
                            <label for="placeholder{$langID}" class="col-sm-3 control-label">Подсказка в поле</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="placeholder{$langID}" name="data[{$langID}][placeholder]" placeholder="Подсказка в поле">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="value{$langID}" class="col-sm-3 control-label">Значение по умолчанию</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="value{$langID}" name="data[{$langID}][value]" placeholder="Значение по умолчанию">
                            </div>
                        </div>
                        {if $type eq 'text'}
                            <div class="form-group">
                                <label for="validation{$langID}" class="col-sm-3 control-label">Дополнительная валидация</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="validation{$langID}" name="data[{$langID}][validation]" placeholder="Дополнительная валидация">
                                        <option value=""></option>
                                        {foreach $validation as $key => $validate}
                                            <option value="{$key}">{$validate}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        {/if}
                    {/if}
                    {if in_array($type, ['select', 'radio', 'checkbox'])}
                        <div class="form-group">
                            <label for="value{$langID}" class="col-sm-3 control-label">Значения</label>
                            <div class="col-sm-9 multyValues" data-lang="{$langID}">
                                <div>
                                    <input type="text" class="form-control" id="value{$langID}" name="data[{$langID}][value][0]" placeholder="Значение" />
                                    <span class="glyphicon glyphicon-resize-vertical"></span>
                                </div>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3">
                                <br /><a href="javascript:void(0);" class="btn btn-success addRow" data-lang="{$langID}">Добавить поле</a>
                            </div>
                        </div>					
                    {/if}
                </div>
            {/foreach}
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>