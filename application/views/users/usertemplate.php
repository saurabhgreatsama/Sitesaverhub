<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sitesaverhub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="templates/css/animate.css">
     <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
	<link href="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/datatables.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/datatables.min.js"></script>

    <link rel="stylesheet" href="templates/css/owl.carousel.min.css">
    <link rel="stylesheet" href="templates/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="templates/css/magnific-popup.css">

    <link rel="stylesheet" href="templates/css/flaticon.css">
    <link rel="stylesheet" href="templates/css/style.css">
    <style>
    /* Add the following CSS code in your existing CSS file or within <style> tags in the <head> section */

    /* Style for category selection */
    .categories {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .category {
        padding: 10px 20px;
        margin: 0 5px;
        color: #fff;
        background-color: #333;
        border-radius: 20px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .category.active {
        background-color: #cdb30c;
    }

	
        /* Style for the popup container */
        .popup-container {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
            padding-top: 60px;
        }

        /* Style for the popup content */
        .popup-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* Style for the close button */
        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        /* Style for the responsive table */
        .responsive-table {
            width: 100%;
            border-collapse: collapse;
        }

        .responsive-table th, .responsive-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Style to make table responsive */
        @media (max-width: 600px) {
            .responsive-table {
                display: block;
                width: 100%;
                overflow-x: auto;
            }
            .responsive-table th, .responsive-table td {
                white-space: nowrap;
            }
        }
    

    /* Responsive adjustments for category selection */
    @media (max-width: 768px) {
        .categories {
            flex-wrap: wrap;
        }

        .category {
            margin: 5px;
        }
    }

    .portfolio-item {
        margin-bottom: 30px;
        padding: 10px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <section class="ftco-section ftco-portfolio">

        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">saved websites lists</h2>
                <p>Working on extension save feature as well it will be live soon</p>

                <div class="categories">

                    <a href="sitelistpages" class="category active toggle-btn">MORE WEBSITES</a>
                    <a href="extensionlistpage" class="category active toggle-btn">MORE EXTENSIONS</a>
                    <a href="#" onclick="openPopup()" class="category active toggle-btn">EXTERNAL LINKS</a>
                    <!-- <button class="toggle-btn" onclick="openPopup()">Toggle Table</button> -->



                </div>
            </div>
            <!-- Add the following code inside the <nav> element -->


        </div>

        <div class="container">


            <div class="row no-gutters pb-5">


                <div class="col-md-12 portfolio-wrap">
                    <?php if ($saved_list): ?>
                    <?php foreach ($saved_list as $item): ?>
                    <div class="row no-gutters align-items-center portfolio-item">
                        <div class="col-md-5 img" style="background-image: url(<?php echo $item->siteimage; ?>);"></div>
                        <div class="col-md-7">
                            <div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
                                <div class="px-4 px-lg-4">
                                    <div class="desc">
                                        <div class="top">
                                            <!--<span class="subheading"><?php echo $item->category; ?></span>-->
                                            <h2 class="mb-2"><a href=""><?php echo $item->sitename; ?></a></h2>
                                        </div>
                                        <div class="absolute">
                                            <p><?php echo $item->sitedetails; ?></p>
                                            <div class="icon d-flex align-items-center mb-4">
                                                <div class="img"
                                                    style="background-image: url(<?php echo $item->siteimage; ?>);">
                                                </div>
                                                <div class="position pl-3">
                                                    <h4 class="mb-0"><?php echo $item->sitename; ?></h4>
                                                    <span><?php echo $item->sitelink; ?></span>
                                                </div>
                                            </div>
                                            <p><a href="<?php echo $item->sitelink; ?>" target="_blank" class="custom-btn">LET'S
                                                    EXPLORE</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <center><p>No saved items found for this user.</p></center>
                    <?php endif; ?>
                </div>
            </div>

        </div>




    </section>

	<div id="popup" class="popup-container">
    <!-- Popup Content -->
    <div class="popup-content">
        <span class="close-button" onclick="closePopup()">&times;</span>
       <center><h6>External Links</h6></center>
        <table class="responsive-table" id="example">
            <thead>
                <tr>
				<th>Name</th>
                            <th>Link</th>
                            <th>Description</th>
                            <th>Action</th>
                </tr>
            </thead>
            <tbody>
			<?php if ($external_list): ?>
                        <?php foreach ($external_list as $item): ?>
 <?php 
    $full_string = $item->url;
    $url = substr($full_string, strpos($full_string, ':') + 2);
?>
                 <tr>
                            <td><?php echo $item->sitename; ?></td>
                            <td><?php echo $url; ?></td>
                            <td>
                                <details>
                                    <summary>Click Here</summary>
                                    <p><?php echo $item->details; ?></p>
                                </details>
                            </td>
                            <td><a href="https://<?php echo $url; ?>" target="_blank"><button type="button" class="btn btn-primary btn-rounded btn-fw">Visit site</button></a></td>
                        </tr>
            </tbody>
			<?php endforeach; ?>
                        <?php else: ?>
                        <p>No saved items found for this user.</p>
                        <?php endif; ?>
        </table>
    </div>
</div>
// <script>
//          $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//           {
//         extend: 'excel',
//         text: 'Download to Excel',
//         className: 'btn btn-default btn-xs bg-success'
//       }
//         ]
//     } );
//   </script>
    <script src="templates/js/jquery.min.js"></script>
    <script src="templates/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="templates/js/popper.min.js"></script>
    <script src="templates/js/bootstrap.min.js"></script>
    <script src="templates/js/jquery.easing.1.3.js"></script>
    <script src="templates/js/jquery.waypoints.min.js"></script>
    <script src="templates/js/jquery.stellar.min.js"></script>
    <script src="templates/js/owl.carousel.min.js"></script>
    <script src="templates/js/jquery.magnific-popup.min.js"></script>
    <script src="templates/js/jquery.animateNumber.min.js"></script>
    <script src="templates/js/scrollax.min.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">-->
    <!--</script>-->
    <!--<script src="templates/js/google-map.js"></script>-->
    <script src="templates/js/main.js"></script>
	
    <script>
    document.querySelector('.toggle-btn').addEventListener('click', function() {
        var table = document.querySelector('table');
        if (table.style.display === 'none' || table.style.display === '') {
            table.style.display = 'table';
        } else {
            table.style.display = 'none';
        }
    });
    </script>

<script>
    function openPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>



</body>

</html>
