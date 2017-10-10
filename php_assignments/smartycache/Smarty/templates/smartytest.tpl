{section name=customer loop=$custid}

  id: {$custid[customer]}<br />

{sectionelse}

  No data

{/section}


{section name=customer loop=$custid}

  {$smarty.section.customer.index} id: {$custid[customer]}<br> {/section}



