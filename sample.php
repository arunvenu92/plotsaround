<?php
$json = '{
    "qqq": [
        {
            "a": "Conne",
            "b": "1",
            "c": "2014-05-19T15:40:06+05:30",
            "d": {
                "d1": "dani",
                "d2": {
                    "d2a": "1",
                    "d2b": "inmin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "1",
                "d4": "web",
                "d5": "8e11e4f63",
                "d6": "admin"
            },
            "e": "145"
        },
        {
            "a": "igroup",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup2",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup3",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup4",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup5",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup6",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup7",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup8",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        },
        {
            "a": "igroup9",
            "b": "1235",
            "c": "2014-05-27T11:23:11+05:30",
            "d": {
                "d1": "sev",
                "d2": {
                    "d2a": "1",
                    "d2b": "admin",
                    "d2c": "1",
                    "d2d": "1",
                    "d2e": "1",
                    "d2f": "1"

                },
                "d3": "7",
                "d4": "c",
                "d5": "changed",
                "d6": "eev"
            },
            "e": "132"
        }
    ]
}';
echo '<pre>';
$jsonarray = json_decode($json,true);
$page = !isset($_GET['page']) ? 1 : $_GET['page'];
$limit = 5; 
$offset = ($page - 1) * $limit;
$total_items = count($jsonarray['qqq']); 
$total_pages = ceil($total_items / $limit);
$array = array_splice($jsonarray['qqq'], $offset, $limit);

for($j=1;$j<=$total_pages;$j++) {
    echo "<span><a href='test.php?page=$j'>$j</a></span>";
}
?>

<table id="show" >
        <thead >
        <tr >
            <th>1stheader</th>
            <th>2stheader</th>
            <th>3stheader</th>
            <th>4stheader</th>
            <th>5stheader</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for($i=0; $i<5; $i++)
        {
            $a= $array[$i]['a'];
            $b= $array[$i]['d']['d1'] ;
            $c= $array[$i]['d']['d2']['d2a'] ;
            $d= $array[$i]['b'];
            $e= $array[$i]['c'];

            ?>
            <tr >
                <td><?php echo $a; ?></td>
                <td><?php echo $b  ?></td>
                <td><?php echo $c;   ?></td>
                <td><?php echo $d;   ?></td>
                <td><?php echo $e;  ?></td>
            </tr>
        <?php }  ?>
        </tbody>
    </table>