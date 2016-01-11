<div class="page-header"><h1>Home</h1></div>

<h2>Array</h2>

<?php
$array = [];

$array[] = [
    'firstName' => 'Mark',
    'lastName' => 'Otto',
    'username' => '@mdo'
];
$array[] = [
    'firstName' => 'Jacob',
    'lastName' => 'Thornton',
    'username' => '@mdo'
];
$array[] = [
    'firstName' => 'Larry',
    'lastName' => 'the Bird',
    'username' => '@mdo'
];
?>
<div data-example-id="simple-table" class="bs-example">
    <table class="table"> 
        <caption>Optional table caption.</caption> 
        <thead> 
            <tr> 
                <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php
            if ($array)
                foreach ($array as $k => $v) {

                    $no = $k + 1;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th> 
                        <td><?php echo $v['firstName']; ?></td>
                        <td><?php echo $v['lastName']; ?></td> 
                        <td><?php echo $v['username']; ?></td> 
                    </tr> 

    <?php } ?>

            <?php
            if ($ar)
                
                ?>
<!--   // skrip kolom aslinya  :<tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> 
<tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> 
<tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> -->
        </tbody> 
    </table> 
</div>