<div class="col-sm-6 ">
    <div class="overview-item overview-item--c2">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
                <div class="text">
                    <h2>{{$items}}</h2>
                    <span>items solid</span>
                </div>
            </div>
            <div class="overview-chart">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                        </div>
                    </div>
                </div>
                <canvas id="widgetChart2" height="115" width="99" class="chartjs-render-monitor" style="display: block; width: 99px; height: 115px;"></canvas>
            </div>
        </div>
    </div>
</div>