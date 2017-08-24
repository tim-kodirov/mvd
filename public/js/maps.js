$(document).ready(function () {
    $('#vmap').css(
        {
            'width': '710px',
            'height': '590px'
        }
    );
    $('.mapPoints a').click(function(e){
        e.preventDefault();
        $('#mapLabels').toggleClass('open');
    });

    $('.mapPoints a').hover(function(){
        filterRegionsEnd($(this).attr('href'));
    }, function(){
        filterRegionsEnd('');
    });
    $(window).click(function(e){
        if(e.target.className.animVal != "jvectormap-region"){
            //console.log(e.target.className.animVal);
            $('#mapLabels').html('');
        }
    });
});

var regions = {
        to: 0,
        qo: 0,
        an: 0,
        bu: 0,
        qa: 0,
        no: 0,
        gu: 0,
        sa: 0,
        fa: 0,
        ji: 0,
        na: 0,
        te: 0,
        xo: 0
    };

function filterRegions(regionId) {
    var regionsList = {};
    $.each(regions, function (key, value) {
        var elementColor = '#4da9ec';
        regionsList[key] = elementColor;
    });
    if (regionId.length > 0){
        regionsList[regionId] = '#57bb64';
    }
    $('#vmap').vectorMap('set', 'colors', regionsList);
    return false;

}


function makeMap(messages) {
    $('#vmap').html('');
    $('.jqvmap-label').remove();
    $('#vmap').vectorMap({
        map: 'uzbekistan',
        backgroundColor: '',
        color: 'transparent',
        hoverColor: '#c7a766',
        selectedColor: '#434ae2',//С†РІРµС‚ РїСЂРё РЅР°Р¶Р°С‚РёРё
        enableZoom: false,
        showTooltip: true,
        borderColor: '#fff',
        borderWidth: 1,
        borderOpacity: 1,
        //onLabelShow: function (event, label, code) {
        //    $('#mapLabels').html(messages[code]);
        //},
        onLabelShow: function (event, label, code) {
            $('.jqvmap-label').html(messages[label]);
            $('#mapLabels').html(messages[code]);
        },

        onRegionClick: function (event, label, code) {
            $('#mapLabels').html(messages2[label]);
            //console.log(messages2[label]);
        }
    });
}