<ul>



{foreach from=$items key=myId item=i}

  <li><a href=# >"id={$myId}" {$i.no}: {$i.label}</li>

{/foreach}

</ul>