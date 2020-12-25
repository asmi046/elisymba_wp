<?php
	require_once("../../../../wp-config.php");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	


<body>
	<?php
		$allpost = array(
			'numberposts' => -1,
			//'category'    => "98, 69, 5, 99, 51, 96, 107, 58, 95, 6, 72, 73, 55, 76, 52, 85, 94, -23, -1",
			'category'    => "-49, -23, -1",
            'post_status' => "any",
            'post_status' => "publish"
		);

		$posts = get_posts( $allpost );
		
		$i = 0;
        
        echo "<table>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>Артикул</th>";
                echo "<th>Фото</th>";
                echo "<th>Заголовое</th>";
                echo "<th>Цена</th>";
            echo "</tr>";

        echo "</thead>";
        
        echo "<tbody>";
        


        foreach($posts as $post){ 
            $img1 = get_bloginfo("url")."/galery/".get_post_meta($post->ID, "_sku", true).".1.jpg";

            echo "<tr>";
                echo "<td>".get_post_meta($post->ID, "_sku", true)."</td>";
                echo "<td><img src = '".$img1."' width = '100'/></td>";
                echo "<td>".$post->post_title."</td>";
                echo "<td>".get_post_meta($post->ID, "_price", true)."</td>";
            echo "</tr>";
        }
        echo "</tbody>"; 
        echo "</table>";
	?>
</body>