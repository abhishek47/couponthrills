<ul class="nav nav-pills nav-stacked nav-pills-stacked-example"> 
                 <li role="presentation" class="{{ isset($page) ? ($page == 'profile' ? 'active' : '') : '' }}"><a href="/home">Profile</a></li> 
                 <li role="presentation"  class="{{ isset($page) ? ($page == 'orders' ? 'active' : '') : '' }}" ><a href="#">Orders</a></li> 
                 <li role="presentation"  class="{{ isset($page) ? ($page == 'mycoupons' ? 'active' : '') : '' }}"><a href="/home/coupons">My Coupons</a></li> 
             </ul>