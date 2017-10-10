    <!-- TOGGLE NAVIGATION -->
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
    </li>
    <!-- END TOGGLE NAVIGATION -->
    <!-- SEARCH -->
    <!-- <li class="xn-search">
        <form role="form">
            <input type="text" name="search" placeholder="Search..."/>
        </form>
    </li> -->
    <!-- END SEARCH -->
    <!-- SIGN OUT -->
    <li class="xn-icon-button pull-right">
        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
    </li>
    <!-- END SIGN OUT -->
    <!-- MESSAGES -->
    <li class="xn-icon-button pull-right">
      <?php $this->load->view($layout.'header/x-navigation/messages') ?>
    </li>
    <!-- END MESSAGES -->
    <!-- TASKS -->
    <li class="xn-icon-button pull-right">
      <?php $this->load->view($layout.'header/x-navigation/tasks') ?>
    </li>
    <!-- END TASKS -->
