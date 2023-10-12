$(document).ready(function(){
    filter_data();
  
      function filter_data()
      {
      
      var action = 'fetch_data';
      var minimum_price = $('#hidden_minimum_price').val();
      var maximum_price = $('#hidden_maximum_price').val();
      var color = get_filter('color');
      var size = get_filter('size');
      
      $.ajax({
      url:"filter_eyebrow.php",
      method:"post",
      data:{action:action,minimum_price:minimum_price, maximum_price:maximum_price,Color:color,Size:size},
      success:function(data){
      $('#table-data').html(data);
     
    }
      });
      }
  
      function get_filter(class_name)
      {
      var filter = [];
      $('.'+class_name+':checked').each(function(){
      filter.push($(this).val());
      
      
      });
      return filter;
      }
      
      $('.common_selector').click(function(){
      filter_data();
      
      });
  
  
      $( function() {
          $( "#slider-range" ).slider({
            range: 500,
            min: 0,
            max: 50000,
            values: [ 75, 50000 ],
            stop:function(event, ui)
            {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
            });
        });
      
      
      
      });