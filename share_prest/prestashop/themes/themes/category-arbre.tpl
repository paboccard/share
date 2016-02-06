{function showMenu}
    {if $level == 2}
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse{$entry->id}">
                    {$entry->name[1]}
                    <i class="fa fa-chevron-down pull-right"></i>
                </a>

            </h4>
        </div>
    {else}
        <ul>
            <li>
                {if $isFinalMenu}
                <a class="li_hover" href="{$link->getSupplierProductLinkByCategory($supplier->id, $entry->id)|escape:'html':'UTF-8'}">{$entry->name[1]}</a>

                {else}
                    {$entry->name[1]}
                {/if}
            </li>
        </ul>
    {/if}
{/function}

{function menu level=2}
        <div class="panel panel-default sub-panel" id='categ{$level}'>
            {foreach $data[$level] as $key => $entry}
                {showMenu level=$level isFinalMenu = empty($data[$key]) }
                {if !empty($data[$key])}
                    
                    <div id="collapse{$key}" class="panel-collapse">
                        <div class="panel-body">
                            {menu data=$data level=$key}
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
{/function}

{menu data=$categories}