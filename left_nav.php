
<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-light">
   <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
   <div class="nicescroll-bar">
      <div class="navbar-nav-wrap">
         <ul class="navbar-nav flex-column">
            <li class="nav-item">
               <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#order_drp">
                 <i class="ion ion-ios-apps"></i>
                 <span class="nav-link-text">발주관리</span>
               </a>
               <ul id="order_drp" class="nav flex-column collapse collapse-level-1">
                  <li class="nav-item">
                     <ul class="nav flex-column">
                        <li class="nav-item">
                           <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/order/listOrder.php">발주 조회</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/order/addOrder.php">발주 등록</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#product_drp">
               <i class="ion ion-ios-copy"></i>
               <span class="nav-link-text">재고관리</span>
               </a>
               <ul id="product_drp" class="nav flex-column collapse collapse-level-1">
                  <li class="nav-item">
                     <ul class="nav flex-column">
                        <li class="nav-item">
                           <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/product/listProduct.php">재고 조회</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/product/addProduct.php">재고 등록</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
               <i class="ion ion-ios-person-add"></i>
               <span class="nav-link-text">인사관리</span>
               </a>
               <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                  <li class="nav-item">
                     <ul class="nav flex-column">
                        <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#company_drp">
                           거래처 관리
                           </a>
                           <ul id="company_drp" class="nav flex-column collapse collapse-level-2">
                              <li class="nav-item">
                                 <ul class="nav flex-column">
                                    <li class="nav-item">
                                       <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/account/listAccount.php">거래처 조회</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/account/addAccount.php">거래처 등록</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#staff_drp">
                           사원 관리
                           </a>
                           <ul id="staff_drp" class="nav flex-column collapse collapse-level-2">
                              <li class="nav-item">
                                 <ul class="nav flex-column">
                                    <li class="nav-item">
                                       <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/employee/listEmployee.php">사원 조회</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/employee/addEmployee.php">사원 등록</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
         <hr class="nav-separator">
      </div>
   </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->
