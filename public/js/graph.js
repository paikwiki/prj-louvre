var graphWidth = $('#graph').width();
var margin = {top: 50, right: 40, bottom: 30, left: 40},
    // width = 600 - margin.left - margin.right,
    width = graphWidth - margin.left - margin.right,
    height = 180 - margin.top - margin.bottom;
var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1);
var y0 = d3.scale.linear().domain([0, 10]).range([height, 0]),
y1 = d3.scale.linear().domain([0, 10]).range([height, 0]);
var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");
// create left yAxis
var yAxisLeft = d3.svg.axis().scale(y0).ticks(6).orient("left");
// create right yAxis
var yAxisRight = d3.svg.axis().scale(y1).ticks(6).orient("right");
var svg = d3.select("#graph").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("class", "graph")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
var data = graphData;
  console.log(data);
  x.domain(data.map(function(d) { return d.date; }));
  y0.domain([0, d3.max(data, function(d) { return d.completeness; })]);

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);
  svg.append("g")
	  .attr("class", "y axis axisLeft")
	  .attr("transform", "translate(0,0)")
	  .call(yAxisLeft)
	.append("text")
	  .attr("y", 6)
	  .attr("dy", "-2em")
	  .style("text-anchor", "end")
	  .style("text-anchor", "end")
	  .text("몰입도");

  svg.append("g")
	  .attr("class", "y axis axisRight")
	  .attr("transform", "translate(" + (width) + ",0)")
	  .call(yAxisRight)
	.append("text")
	  .attr("y", 6)
	  .attr("dy", "-2em")
	  .attr("dx", "2em")
	  .style("text-anchor", "end")
	  .text("난이도");
  bars = svg.selectAll(".bar").data(data).enter();
  bars.append("rect")
      .attr("class", "bar1")
      .attr("x", function(d) { return x(d.date); })
      .attr("width", x.rangeBand()/2)
      .attr("y", function(d) { return y0(d.completeness); })
	  .attr("height", function(d,i,j) { return height - y0(d.completeness); });
  bars.append("rect")
      .attr("class", "bar2")
      .attr("x", function(d) { return x(d.date) + x.rangeBand()/2; })
      .attr("width", x.rangeBand() / 2)
      .attr("y", function(d) { return y1(d.completeness); })
	  .attr("height", function(d,i,j) { return height - y1(d.completeness); });
// });
