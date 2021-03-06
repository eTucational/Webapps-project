

      function columnChart(yAxis, xAxis, data, chartId, chartTitle) {
         
        // Create the data table.
        //var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Score');
        var rows = [];


        for (var index = 0; index < yAxis.length; index++) {
            rows.push([yAxis[index], xAxis[index]]);

        }
            
        data.addRows(rows);
        // Set chart options
        var options = {'title':chartTitle,
                       'width':'100%',//$(".panel").width(),
                       'height':400,
                       
                        vAxis: {gridlines: { count: 5 },
                                minValue: 0,
                                maxValue: 100
                                },
                        legend: {position: 'none'},
                        bar: {groupWidth: 15},
                        series: { 0: {color: '#673ab7'} }
                        
                        

                        
                    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById(chartId));
        chart.draw(data, options);
        
        
    
      }
      
      function lineChart(yAxis, xAxis, data, chartId, chartTitle) {
         
        // Create the data table.
        //var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Score');
        var rows = [];


        for (var index = 0; index < yAxis.length; index++) {
            rows.push([yAxis[index], xAxis[index]]);

        }
            
        data.addRows(rows);

        var options = {'title':chartTitle,
                       'width':'100%',
                       'height':400,
                        vAxis: {gridlines: { count: 5 },
                                minValue: 0,
                                maxValue: 100
                                },
                        series: { 0: {color: '#673ab7'} }


                        
                    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById(chartId));
        chart.draw(data, options);
        
        
    
      }

      
    
