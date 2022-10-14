@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Example Content</h4>
            </div>
            <div class="card-body">
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body" style="position: relative;">
                                        <div id="chart-profile-visit" style="min-height: 315px;"><div id="apexchartsmmo8aywj" class="apexcharts-canvas apexchartsmmo8aywj apexcharts-theme-light" style="width: 621px; height: 300px;"><svg id="SvgjsSvg2842" width="621" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2844" class="apexcharts-inner apexcharts-graphical" transform="translate(39.23958396911621, 30)"><defs id="SvgjsDefs2843"><linearGradient id="SvgjsLinearGradient2848" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2849" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2850" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2851" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskmmo8aywj"><rect id="SvgjsRect2853" width="575.7604160308838" height="233.42666563796996" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskmmo8aywj"><rect id="SvgjsRect2854" width="575.7604160308838" height="237.42666563796996" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2852" width="33.35269093513489" height="233.42666563796996" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2848)" class="apexcharts-xcrosshairs" y2="233.42666563796996" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2870" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2871" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2873" font-family="Helvetica, Arial, sans-serif" x="23.82335066795349" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2874">Jan</tspan><title>Jan</title></text><text id="SvgjsText2876" font-family="Helvetica, Arial, sans-serif" x="71.47005200386047" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2877">Feb</tspan><title>Feb</title></text><text id="SvgjsText2879" font-family="Helvetica, Arial, sans-serif" x="119.11675333976746" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2880">Mar</tspan><title>Mar</title></text><text id="SvgjsText2882" font-family="Helvetica, Arial, sans-serif" x="166.76345467567444" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2883">Apr</tspan><title>Apr</title></text><text id="SvgjsText2885" font-family="Helvetica, Arial, sans-serif" x="214.41015601158142" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2886">May</tspan><title>May</title></text><text id="SvgjsText2888" font-family="Helvetica, Arial, sans-serif" x="262.0568573474884" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2889">Jun</tspan><title>Jun</title></text><text id="SvgjsText2891" font-family="Helvetica, Arial, sans-serif" x="309.7035586833954" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2892">Jul</tspan><title>Jul</title></text><text id="SvgjsText2894" font-family="Helvetica, Arial, sans-serif" x="357.35026001930237" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2895">Aug</tspan><title>Aug</title></text><text id="SvgjsText2897" font-family="Helvetica, Arial, sans-serif" x="404.99696135520935" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2898">Sep</tspan><title>Sep</title></text><text id="SvgjsText2900" font-family="Helvetica, Arial, sans-serif" x="452.64366269111633" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2901">Oct</tspan><title>Oct</title></text><text id="SvgjsText2903" font-family="Helvetica, Arial, sans-serif" x="500.2903640270233" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2904">Nov</tspan><title>Nov</title></text><text id="SvgjsText2906" font-family="Helvetica, Arial, sans-serif" x="547.9370653629303" y="262.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2907">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine2908" x1="0" y1="234.42666563796996" x2="571.7604160308838" y2="234.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2921" class="apexcharts-grid"><g id="SvgjsG2922" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2937" x1="0" y1="0" x2="571.7604160308838" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2938" x1="0" y1="58.35666640949249" x2="571.7604160308838" y2="58.35666640949249" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2939" x1="0" y1="116.71333281898498" x2="571.7604160308838" y2="116.71333281898498" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2940" x1="0" y1="175.06999922847746" x2="571.7604160308838" y2="175.06999922847746" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2941" x1="0" y1="233.42666563796996" x2="571.7604160308838" y2="233.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2923" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2924" x1="0" y1="234.42666563796996" x2="0" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2925" x1="47.64670133590698" y1="234.42666563796996" x2="47.64670133590698" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2926" x1="95.29340267181396" y1="234.42666563796996" x2="95.29340267181396" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2927" x1="142.94010400772095" y1="234.42666563796996" x2="142.94010400772095" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2928" x1="190.58680534362793" y1="234.42666563796996" x2="190.58680534362793" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2929" x1="238.2335066795349" y1="234.42666563796996" x2="238.2335066795349" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2930" x1="285.8802080154419" y1="234.42666563796996" x2="285.8802080154419" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2931" x1="333.5269093513489" y1="234.42666563796996" x2="333.5269093513489" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2932" x1="381.17361068725586" y1="234.42666563796996" x2="381.17361068725586" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2933" x1="428.82031202316284" y1="234.42666563796996" x2="428.82031202316284" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2934" x1="476.4670133590698" y1="234.42666563796996" x2="476.4670133590698" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2935" x1="524.1137146949768" y1="234.42666563796996" x2="524.1137146949768" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2936" x1="571.7604160308838" y1="234.42666563796996" x2="571.7604160308838" y2="240.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2943" x1="0" y1="233.42666563796996" x2="571.7604160308838" y2="233.42666563796996" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2942" x1="0" y1="1" x2="0" y2="233.42666563796996" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2944" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2945" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2946" class="apexcharts-point-annotations"></g><g id="SvgjsG2855" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2856" class="apexcharts-series" rel="1" seriesName="sales" data:realIndex="0"><path id="SvgjsPath2858" d="M 7.147005200386047 233.42666563796996L 7.147005200386047 167.7754159272909L 40.499696135520935 167.7754159272909L 40.499696135520935 167.7754159272909L 40.499696135520935 233.42666563796996L 40.499696135520935 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 7.147005200386047 233.42666563796996L 7.147005200386047 167.7754159272909L 40.499696135520935 167.7754159272909L 40.499696135520935 167.7754159272909L 40.499696135520935 233.42666563796996L 40.499696135520935 233.42666563796996z" pathFrom="M 7.147005200386047 233.42666563796996L 7.147005200386047 233.42666563796996L 40.499696135520935 233.42666563796996L 40.499696135520935 233.42666563796996L 40.499696135520935 233.42666563796996L 7.147005200386047 233.42666563796996" cy="167.7754159272909" cx="54.79370653629303" j="0" val="9" barHeight="65.65124971067905" barWidth="33.35269093513489"></path><path id="SvgjsPath2859" d="M 54.79370653629303 233.42666563796996L 54.79370653629303 87.53499961423873L 88.14639747142792 87.53499961423873L 88.14639747142792 87.53499961423873L 88.14639747142792 233.42666563796996L 88.14639747142792 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 54.79370653629303 233.42666563796996L 54.79370653629303 87.53499961423873L 88.14639747142792 87.53499961423873L 88.14639747142792 87.53499961423873L 88.14639747142792 233.42666563796996L 88.14639747142792 233.42666563796996z" pathFrom="M 54.79370653629303 233.42666563796996L 54.79370653629303 233.42666563796996L 88.14639747142792 233.42666563796996L 88.14639747142792 233.42666563796996L 88.14639747142792 233.42666563796996L 54.79370653629303 233.42666563796996" cy="87.53499961423873" cx="102.44040787220001" j="1" val="20" barHeight="145.89166602373123" barWidth="33.35269093513489"></path><path id="SvgjsPath2860" d="M 102.44040787220001 233.42666563796996L 102.44040787220001 14.589166602373098L 135.7930988073349 14.589166602373098L 135.7930988073349 14.589166602373098L 135.7930988073349 233.42666563796996L 135.7930988073349 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 102.44040787220001 233.42666563796996L 102.44040787220001 14.589166602373098L 135.7930988073349 14.589166602373098L 135.7930988073349 14.589166602373098L 135.7930988073349 233.42666563796996L 135.7930988073349 233.42666563796996z" pathFrom="M 102.44040787220001 233.42666563796996L 102.44040787220001 233.42666563796996L 135.7930988073349 233.42666563796996L 135.7930988073349 233.42666563796996L 135.7930988073349 233.42666563796996L 102.44040787220001 233.42666563796996" cy="14.589166602373098" cx="150.087109208107" j="2" val="30" barHeight="218.83749903559686" barWidth="33.35269093513489"></path><path id="SvgjsPath2861" d="M 150.087109208107 233.42666563796996L 150.087109208107 87.53499961423873L 183.43980014324188 87.53499961423873L 183.43980014324188 87.53499961423873L 183.43980014324188 233.42666563796996L 183.43980014324188 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 150.087109208107 233.42666563796996L 150.087109208107 87.53499961423873L 183.43980014324188 87.53499961423873L 183.43980014324188 87.53499961423873L 183.43980014324188 233.42666563796996L 183.43980014324188 233.42666563796996z" pathFrom="M 150.087109208107 233.42666563796996L 150.087109208107 233.42666563796996L 183.43980014324188 233.42666563796996L 183.43980014324188 233.42666563796996L 183.43980014324188 233.42666563796996L 150.087109208107 233.42666563796996" cy="87.53499961423873" cx="197.73381054401398" j="3" val="20" barHeight="145.89166602373123" barWidth="33.35269093513489"></path><path id="SvgjsPath2862" d="M 197.73381054401398 233.42666563796996L 197.73381054401398 160.48083262610436L 231.08650147914886 160.48083262610436L 231.08650147914886 160.48083262610436L 231.08650147914886 233.42666563796996L 231.08650147914886 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 197.73381054401398 233.42666563796996L 197.73381054401398 160.48083262610436L 231.08650147914886 160.48083262610436L 231.08650147914886 160.48083262610436L 231.08650147914886 233.42666563796996L 231.08650147914886 233.42666563796996z" pathFrom="M 197.73381054401398 233.42666563796996L 197.73381054401398 233.42666563796996L 231.08650147914886 233.42666563796996L 231.08650147914886 233.42666563796996L 231.08650147914886 233.42666563796996L 197.73381054401398 233.42666563796996" cy="160.48083262610436" cx="245.38051187992096" j="4" val="10" barHeight="72.94583301186562" barWidth="33.35269093513489"></path><path id="SvgjsPath2863" d="M 245.38051187992096 233.42666563796996L 245.38051187992096 87.53499961423873L 278.73320281505585 87.53499961423873L 278.73320281505585 87.53499961423873L 278.73320281505585 233.42666563796996L 278.73320281505585 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 245.38051187992096 233.42666563796996L 245.38051187992096 87.53499961423873L 278.73320281505585 87.53499961423873L 278.73320281505585 87.53499961423873L 278.73320281505585 233.42666563796996L 278.73320281505585 233.42666563796996z" pathFrom="M 245.38051187992096 233.42666563796996L 245.38051187992096 233.42666563796996L 278.73320281505585 233.42666563796996L 278.73320281505585 233.42666563796996L 278.73320281505585 233.42666563796996L 245.38051187992096 233.42666563796996" cy="87.53499961423873" cx="293.02721321582794" j="5" val="20" barHeight="145.89166602373123" barWidth="33.35269093513489"></path><path id="SvgjsPath2864" d="M 293.02721321582794 233.42666563796996L 293.02721321582794 14.589166602373098L 326.37990415096283 14.589166602373098L 326.37990415096283 14.589166602373098L 326.37990415096283 233.42666563796996L 326.37990415096283 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 293.02721321582794 233.42666563796996L 293.02721321582794 14.589166602373098L 326.37990415096283 14.589166602373098L 326.37990415096283 14.589166602373098L 326.37990415096283 233.42666563796996L 326.37990415096283 233.42666563796996z" pathFrom="M 293.02721321582794 233.42666563796996L 293.02721321582794 233.42666563796996L 326.37990415096283 233.42666563796996L 326.37990415096283 233.42666563796996L 326.37990415096283 233.42666563796996L 293.02721321582794 233.42666563796996" cy="14.589166602373098" cx="340.6739145517349" j="6" val="30" barHeight="218.83749903559686" barWidth="33.35269093513489"></path><path id="SvgjsPath2865" d="M 340.6739145517349 233.42666563796996L 340.6739145517349 87.53499961423873L 374.0266054868698 87.53499961423873L 374.0266054868698 87.53499961423873L 374.0266054868698 233.42666563796996L 374.0266054868698 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 340.6739145517349 233.42666563796996L 340.6739145517349 87.53499961423873L 374.0266054868698 87.53499961423873L 374.0266054868698 87.53499961423873L 374.0266054868698 233.42666563796996L 374.0266054868698 233.42666563796996z" pathFrom="M 340.6739145517349 233.42666563796996L 340.6739145517349 233.42666563796996L 374.0266054868698 233.42666563796996L 374.0266054868698 233.42666563796996L 374.0266054868698 233.42666563796996L 340.6739145517349 233.42666563796996" cy="87.53499961423873" cx="388.3206158876419" j="7" val="20" barHeight="145.89166602373123" barWidth="33.35269093513489"></path><path id="SvgjsPath2866" d="M 388.3206158876419 233.42666563796996L 388.3206158876419 160.48083262610436L 421.6733068227768 160.48083262610436L 421.6733068227768 160.48083262610436L 421.6733068227768 233.42666563796996L 421.6733068227768 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 388.3206158876419 233.42666563796996L 388.3206158876419 160.48083262610436L 421.6733068227768 160.48083262610436L 421.6733068227768 160.48083262610436L 421.6733068227768 233.42666563796996L 421.6733068227768 233.42666563796996z" pathFrom="M 388.3206158876419 233.42666563796996L 388.3206158876419 233.42666563796996L 421.6733068227768 233.42666563796996L 421.6733068227768 233.42666563796996L 421.6733068227768 233.42666563796996L 388.3206158876419 233.42666563796996" cy="160.48083262610436" cx="435.9673172235489" j="8" val="10" barHeight="72.94583301186562" barWidth="33.35269093513489"></path><path id="SvgjsPath2867" d="M 435.9673172235489 233.42666563796996L 435.9673172235489 87.53499961423873L 469.3200081586838 87.53499961423873L 469.3200081586838 87.53499961423873L 469.3200081586838 233.42666563796996L 469.3200081586838 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 435.9673172235489 233.42666563796996L 435.9673172235489 87.53499961423873L 469.3200081586838 87.53499961423873L 469.3200081586838 87.53499961423873L 469.3200081586838 233.42666563796996L 469.3200081586838 233.42666563796996z" pathFrom="M 435.9673172235489 233.42666563796996L 435.9673172235489 233.42666563796996L 469.3200081586838 233.42666563796996L 469.3200081586838 233.42666563796996L 469.3200081586838 233.42666563796996L 435.9673172235489 233.42666563796996" cy="87.53499961423873" cx="483.6140185594559" j="9" val="20" barHeight="145.89166602373123" barWidth="33.35269093513489"></path><path id="SvgjsPath2868" d="M 483.6140185594559 233.42666563796996L 483.6140185594559 14.589166602373098L 516.9667094945908 14.589166602373098L 516.9667094945908 14.589166602373098L 516.9667094945908 233.42666563796996L 516.9667094945908 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 483.6140185594559 233.42666563796996L 483.6140185594559 14.589166602373098L 516.9667094945908 14.589166602373098L 516.9667094945908 14.589166602373098L 516.9667094945908 233.42666563796996L 516.9667094945908 233.42666563796996z" pathFrom="M 483.6140185594559 233.42666563796996L 483.6140185594559 233.42666563796996L 516.9667094945908 233.42666563796996L 516.9667094945908 233.42666563796996L 516.9667094945908 233.42666563796996L 483.6140185594559 233.42666563796996" cy="14.589166602373098" cx="531.2607198953629" j="10" val="30" barHeight="218.83749903559686" barWidth="33.35269093513489"></path><path id="SvgjsPath2869" d="M 531.2607198953629 233.42666563796996L 531.2607198953629 87.53499961423873L 564.6134108304977 87.53499961423873L 564.6134108304977 87.53499961423873L 564.6134108304977 233.42666563796996L 564.6134108304977 233.42666563796996z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmmo8aywj)" pathTo="M 531.2607198953629 233.42666563796996L 531.2607198953629 87.53499961423873L 564.6134108304977 87.53499961423873L 564.6134108304977 87.53499961423873L 564.6134108304977 233.42666563796996L 564.6134108304977 233.42666563796996z" pathFrom="M 531.2607198953629 233.42666563796996L 531.2607198953629 233.42666563796996L 564.6134108304977 233.42666563796996L 564.6134108304977 233.42666563796996L 564.6134108304977 233.42666563796996L 531.2607198953629 233.42666563796996" cy="87.53499961423873" cx="578.9074212312698" j="11" val="20" barHeight="145.89166602373123" barWidth="33.35269093513489"></path></g><g id="SvgjsG2857" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2947" x1="0" y1="0" x2="571.7604160308838" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2948" x1="0" y1="0" x2="571.7604160308838" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2909" class="apexcharts-yaxis" rel="0" transform="translate(9.239583969116211, 0)"><g id="SvgjsG2910" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2911" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2912">32</tspan></text><text id="SvgjsText2913" font-family="Helvetica, Arial, sans-serif" x="20" y="89.7566664094925" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2914">24</tspan></text><text id="SvgjsText2915" font-family="Helvetica, Arial, sans-serif" x="20" y="148.113332818985" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2916">16</tspan></text><text id="SvgjsText2917" font-family="Helvetica, Arial, sans-serif" x="20" y="206.46999922847746" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2918">8</tspan></text><text id="SvgjsText2919" font-family="Helvetica, Arial, sans-serif" x="20" y="264.82666563796994" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2920">0</tspan></text></g></g><g id="SvgjsG2845" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 670px; height: 340px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>

@endsection