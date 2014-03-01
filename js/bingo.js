$(document).ready(function()
{
  generate_board();
});

function generate_board()
{
  var $table = '<pre><table id=main_table><thead><th>B</th><th>I</th><th>N</th><th>G</th><th>O</th></thead><tbody>';
  $('#main_div').append($table);
  var val = 0;
  for(var i = 1; i <= 15; i++)
  {
    var $tr = $('#main_table').append('<tr class=rw id=row_' + i + '>');
    for(var j = 0; j <= 61; j+=15)
    {
      var $td = $('#row_' + i).append('<td id=box_' + i + '_' + j + ' class="btn btn-ok btn-info">' + (i+j) + '</td>');
    }
  }
}
