  <!-- header --> 
  <div data-ng-include=" 'theme/topbar' " class="page-topbar {{app.settings.menuFolded ? 'sidebar_shift' : ''}} {{app.settings.chatFolded ? '' : 'chat_shift'}}"> 
  </div>
  <!-- / header -->

  
<!-- START CONTAINER -->

<div class="page-container row-fluid" ui-sectionbox ng-controller="ModalDemoCtrl">

    <!-- leftbar -->
      <div ng-if="app.type == 'general'" data-ng-include=" 'theme/leftbar' " class="page-sidebar {{app.settings.menuFolded ? 'collapseit' : 'expandit'}}  {{app.settings.chatFolded ? '' : 'chat_shift'}}"></div>
    <!-- / leftbar -->

    <!-- START CONTENT -->
    <section id="main-content" class="{{app.settings.menuFolded ? 'sidebar_shift' : ''}} {{app.settings.chatFolded ? '' : 'chat_shift'}}">
        <div class="pull-left mobile-pagetitle"><h1>{{app.settings.pagetitle}}</h1></div>
        <section class="wrapper main-wrapper" style='' ui-view>

        </section>
    </section>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

<!-- footer -->
<div data-ng-include=" 'theme/footer' ">
</div>
<!-- / footer -->


