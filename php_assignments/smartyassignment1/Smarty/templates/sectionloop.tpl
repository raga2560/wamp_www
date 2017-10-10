<table>

  <tr>

    <th>index</th><th>id</th>

    <th>index_prev</th><th>prev_id</th>

    <th>index_next</th><th>next_id</th>

  </tr>

{section name=row loop=$rows}

  <tr>

    <td>{$smarty.section.row.index}</td><td>{$rows[row]}</td>


    <td>{$smarty.section.row.index_prev}</td><td>{(isset($rows[row.index_prev]))?$rows[row.index_prev]:'no value'}</td>
	

    <td>{$smarty.section.row.index_next}</td><td>{(isset($rows[row.index_next]))?$rows[row.index_next]:'no value'}</td>

  </tr>

{/section}

</table>
