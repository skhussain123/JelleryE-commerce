<?php
include "webheader.php";

?>

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Jewellery</a>
                    <span class="breadcrumb-item active">Earrings</span>
                </nav>
            </div>
        </div>
    </div>


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
                <div class="bg-light p-4 mb-30">

                <div class="list-group">
                    <v class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="slider-range"></div>
                </div>
        </div>
                <!-- Price End -->
                
                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by color</span></h5>
                <div class="bg-light p-4 mb-30">
                   
                <?php
                require'filter_by_color.php';
                ?>
                   
                </div>
                <div class="" id="id"></div>
                <script src="admin/jquery-3.6.3.min.js"></script>
               <!-- Color End -->

                <!-- Size Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by size</span></h5>
                <div class="bg-light p-4 mb-30">
                    <?php
                    require'filter_by_size.php';
                    ?>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div  id="searchresult" style="display:none;">
                       </div>
                  
                       <div class="l" id="table-data">
                        </div>

            
                        <div  id="show-data">
                        </div>
                      
                     <script src="admin/jquery-3.6.3.min.js"></script>
                       <script>

                            ////search bar code
                        $(document).ready(function (){
                            $('#search').keyup(function () {
                                var value = $(this).val();
                                if (value != "") {

                                    $.ajax({
                                        url: "ring_search.php",
                                        method: "POST",
                                        data: { value: value },
                                        success: function (data) {
                                        $('#searchresult').html(data);
                                        $('#searchresult').show();
                                        $('#table-data').hide();
                                        }

                                    });
                                }
                                else {
                                    $('#searchresult').hide();
                                    $('#table-data').show();

                                }
                                
                            });
                        
                       
                        });

                       </script>
                       </script>
            
                     
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <?php
    include "footer.php"
    ?>
     <script src="filter_eing.js"></script>