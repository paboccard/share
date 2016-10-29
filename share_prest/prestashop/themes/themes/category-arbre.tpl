{function showMenu}
    {if $level == 2}
        <div class="link"><span class="fa fa-list-alt icon1"></span>{$entry->name[1]}<span class="fa fa-chevron-down pull-right"></span></div>
    {else}
        <ul class="submen">
            <li>
                {if $isFinalMenu}
                <a class="li_hover" href="{$link->getSupplierProductLinkByCategory($supplier->id, $entry->id)|escape:'html':'UTF-8'}">{$entry->name[1]}</a>

                {else}
                    <div class="title_snd"> {$entry->name[1]}</div>
                {/if}
            </li>
        </ul>
    {/if}
{/function}

{function menu level=2}
            {foreach $data[$level] as $key => $entry}
                {showMenu level=$level isFinalMenu = empty($data[$key]) }
                {if !empty($data[$key])}
                    
                    
                            {menu data=$data level=$key}
                        
                        
                {/if}
            {/foreach}
{/function}

{menu data=$categories}