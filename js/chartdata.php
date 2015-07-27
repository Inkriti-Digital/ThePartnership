<script type="text/javascript">
var pieData1 = [
<?php
// will define the chart data here
while( have_rows('geography_chart_data') ): the_row();
$value = get_sub_field("geography_chart_data_value");
$color = get_sub_field("geography_chart_data_color");
$highlight =get_sub_field("geography_chart_data_highlight_color");
$label = get_sub_field("geography_chart_data_label");
?>
	{
		value: "<?php echo $value; ?>",
		color:"<?php echo $color; ?>",
		highlight: "<?php echo $highlight; ?>",
		label: "<?php echo $label; ?>"
	},
<?php
global $query;
endwhile;
?>
];
</script>
<!-- chat data 2-->
<script type="text/javascript">
var pieData2 = [
<?php
// will define the chart data here
while( have_rows('career_level_chat_data') ): the_row();
$value = get_sub_field("career_level_chat_data_value");
$color = get_sub_field("career_level_chat_data_color");
$highlight =get_sub_field("career_level_chat_data_highlight_color");
$label = get_sub_field("career_level_chat_data_label");
?>
	{
		value: "<?php echo $value; ?>",
		color:"<?php echo $color; ?>",
		highlight: "<?php echo $highlight; ?>",
		label: "<?php echo $label; ?>"
	},
<?php
global $query;
endwhile;
?>
];
</script>
<!--chart data 3-->
<script type="text/javascript">
var pieData3 = [
<?php
// will define the chart data here
while( have_rows('industries_chat_data') ): the_row();
$value = get_sub_field("industries_chat_data_value");
$color = get_sub_field("industries_chat_data_color");
$highlight =get_sub_field("industries_chat_data_highlight_color");
$label = get_sub_field("industries_chat_data_label");
?>
	{
		value: "<?php echo $value; ?>",
		color:"<?php echo $color; ?>",
		highlight: "<?php echo $highlight; ?>",
		label: "<?php echo $label; ?>"
	},
<?php
global $query;
endwhile;
?>
];
</script>

