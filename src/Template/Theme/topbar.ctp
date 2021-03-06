<!-- START TOPBAR -->
<div class='logo-area'>
</div>
<div class='quick-area'>
    <div class="pull-left pagetitle">
        <span class='line'></span>
        <h1>{{app.settings.pagetitle}}</h1>
        <div></div>
    </div>
    <div class='pull-right quickright'>
        <ul class="info-menu right-links list-inline list-unstyled">   
            <li class="dropdown profile tab" uib-dropdown>
                <a href class="dropdown-toggle toggle" uib-dropdown-toggle>
                    <img ng-if="app.type == 'general'" src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                    <span class="profile-status available"></span>
                    
                        <!-- <span class='hidden-sm hidden-md hidden-xs'>John Carter </span>  -->
                        <!-- <i class="material-icons hidden-md hidden-sm hidden-xs">expand_more</i> -->
                </a>
                <ul class="dropdown-menu dropdown-menu-right profile animated fadeIn">
                    <li>
                        <a ui-sref="app.dashboard">
                            <i class="material-icons">settings</i> <?= __('Inicio');?>
                        </a>
                    </li>
                    <li class="last">
                        <a ui-sref="access.logout">
                            <i class="material-icons">lock</i> <?= __('Logout');?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END TOPBAR -->
