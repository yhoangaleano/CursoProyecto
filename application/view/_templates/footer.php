</div>
</div>
</div>

<!-- Variable para trabajar con ajax y js -->
<script>
	var url = "<?php echo URL; ?>";
</script>

<!-- our JavaScript -->
<script src="<?php echo URL; ?>js/jquery.min.js"></script>
<script src="<?php echo URL; ?>js/bootstrap.min.js"></script>

<?php 
if (isset($js)) {
	echo $js;
};
?>



</body>
</html>
