$(document).ready(function () {
  var list = ["I am vegan", "I am vegetarian", "I am gluten free","I am diabetic", "I have no dietary restrictions"];

  var bubbleChart = new d3.svg.BubbleChart({
    supportResponsive: true,
    //container: => use @default
    size: 600,
    //viewBoxSize: => use @default
    innerRadius: 600 / 3.5,
    //outerRadius: => use @default
    radiusMin: 50,
    //radiusMax: use @default
    //intersectDelta: use @default
    //intersectInc: use @default
    //circleColor: use @default
    data: {
      items: [
        {text: "I am vegan", count: "0"},
        {text: "I am vegetarian", count: "2"},
        {text: "I am gluten free", count: "3"},
        {text: "I am diabetic", count: "3"},
        {text: "I have no dietary restrictions", count: "2"},
      ],
      eval: function (item) {return item.count;},
      classed: function (item) {return item.text.split(" ").join("");}
    },
    plugins: [
      {
        name: "central-click",
        options: {
          text: "(See more detail)",
          style: {
            "font-size": "12px",
            "font-style": "italic",
            "font-family": "Source Sans Pro, sans-serif",
            //"font-weight": "700",
            "text-anchor": "middle",
            "fill": "white"
          },
          // clickedNode: {name: getCentralNode.classed()},
          attr: {dy: "65px"},
          onClick: function() {
            // $('#myModal').modal('show');
            // $('#modalContent').html('<P>Some info will be displayed here.</P>');
              if(bubbleChart.getClickedNode().text() == bubbleChart.getCentralNode().text()){
                var index;
                var modalContent = "<div><table id='contentTable'>";
                $.ajaxSetup({async:false});
                $.get( "getEncodedResponses.php", function( data ) {
                    // alert( "Data Loaded: " + data );
                    var obj = $.parseJSON(data);
                    $.each(obj, function (){
                        modalContent+= "<tr>"+ this.src_first_name +" "+this.src_last_name+"</tr></br>";
                        modalContent+= "<tr>"+ this.primary_city +", "+this.primary_state+", "+this.primary_country+"</tr></br>";
                        modalContent+= "<tr>"+ this.primary_zip +"</tr></br>";
                        modalContent+= "<br>";
                        // alert(this.src_first_name +" "+this.src_last_name);
                    });
                });
                $.ajaxSetup({async:true});
                modalContent+= "</div></table>";
                // alert(modalContent);
                for (index = 0; index < list.length; index++) {
                    if((bubbleChart.getClickedNode().text()).indexOf(list[index]) != -1){
                      $('#myModal').modal('show');
                      $('#modalContent').html(modalContent);
                    }
                }    
              }     
          }
        }
      },
      {
        name: "lines",
        options: {
          format: [
            {// Line #0
              textField: "count",
              classed: {count: true},
              style: {
                "font-size": "28px",
                "font-family": "Source Sans Pro, sans-serif",
                "text-anchor": "middle",
                fill: "white"
              },
              attr: {
                dy: "0px",
                x: function (d) {return d.cx;},
                y: function (d) {return d.cy;}
              }
            },
            {// Line #1
              textField: "text",
              classed: {text: true},
              style: {
                "font-size": "14px",
                "font-family": "Source Sans Pro, sans-serif",
                "text-anchor": "middle",
                fill: "white"
              },
              attr: {
                dy: "20px",
                x: function (d) {return d.cx;},
                y: function (d) {return d.cy;}
              }
            }
          ],
          centralFormat: [
            {// Line #0
              style: {"font-size": "50px"},
              attr: {}
            },
            {// Line #1
              style: {"font-size": "30px"},
              attr: {dy: "40px"}
            }
          ]
        }
      }]
  });
});
