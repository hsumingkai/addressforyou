
function createRecommendedIndustriesTable(recommendjplace, norecommendjplace, recommendedIndustry, Industry){
    for(var IndustryNo in Industry){
        if(recommendedIndustry[IndustryNo]==1){
            $(recommendjplace).append ('<tr><th scope="row"></th><td class="text-center">'+IndustryNo+'</td><td class="text-center">'+Industry[IndustryNo]+'</td></tr>')
        }else{
            $(norecommendjplace).append ('<tr><th scope="row"></th><td class="text-center">'+IndustryNo+'</td><td class="text-center">'+Industry[IndustryNo]+'</td></tr>')
        }
    }
}
function createRecommendedStoresTable(jplace, recommendedstores ){
    console.log(recommendedstores)
    var preaddress = '新北市新莊區'

    for(var store in recommendedstores){
        $(jplace).append ('<tr><th scope="row">'+store+'</th><td>'+preaddress+recommendedstores[store].address+'</td></tr>')

        console.log(store)
    }
}
function getDefaultPlace(){
    return {lat:25.033679, lng:121.44096}
}
function getIndustry(){
    return {"F201010":"農產品","F203010":"食品什貨","F203020":"菸酒","F204110":"服飾","F205040":"家具","F206010":"五金","F206020":"日常用品","F206030":"模具","F206040":"水電行","F207030":"清潔用品","F208040":"化粧品","F208050":"成藥","F209060":"樂器","F211010":"建材","F213010":"電器","F213030":"電腦","F213060":"電信","F213080":"機械器具","F213990":"其他機械","F214020":"機車","F214030":"汽機車零件","F214050":"車胎","F215010":"首飾","F218010":"資訊軟體","F219010":"電子材料","F399010":"便利商店","F501030":"飲料店","F501060":"餐館","JE01010":"租賃","JZ99080":"美容美髮"}
}
function getXinzhuangPath(){
    return [{lat:25.03949351807811,lng:121.46767616271973},{lat:25.036266269632527,lng:121.46201133728027},{lat:25.03506089000065,lng:121.45922183990479},{lat:25.032883399998077,lng:121.454758644104},{lat:25.029772632953623,lng:121.45196914672852},{lat:25.024911901565094,lng:121.44789218902588},{lat:25.018689884474526,lng:121.4434289932251},{lat:25.010834137509335,lng:121.43913745880127},{lat:25.005972656239187,lng:121.43716335296631},{lat:25.002161120365894,lng:121.4370346069336},{lat:25.000333096919253,lng:121.43514633178711},{lat:24.999632995630652,lng:121.43252849578857},{lat:24.998349466241233,lng:121.43128395080566},{lat:24.996910341588716,lng:121.4307689666748},{lat:24.996579729490655,lng:121.43119812011719},{lat:24.99517948015556,lng:121.43016815185547},{lat:24.995568439904556,lng:121.42961025238037},{lat:24.99593795052583,lng:121.42973899841309},{lat:24.996463042655417,lng:121.43023252487183},{lat:24.99753266783105,lng:121.43049001693726},{lat:25.000021941283457,lng:121.43115520477295},{lat:25.000683146067637,lng:121.43089771270752},{lat:25.001791628458143,lng:121.43151998519897},{lat:25.003405716511082,lng:121.4319920539856},{lat:25.003930776728183,lng:121.43160581588745},{lat:25.004708639591467,lng:121.43074750900269},{lat:25.005817085661366,lng:121.43023252487183},{lat:25.007003306340827,lng:121.42982482910156},{lat:25.00799505582131,lng:121.42877340316772},{lat:25.008345083137833,lng:121.42765760421753},{lat:25.01027021554802,lng:121.4264988899231},{lat:25.011048038265578,lng:121.42602682113647},{lat:25.013420367127186,lng:121.42424583435059},{lat:25.01489818816838,lng:121.4239239692688},{lat:25.016687105631693,lng:121.4234733581543},{lat:25.017192664538747,lng:121.42205715179443},{lat:25.018262109213193,lng:121.42094135284424},{lat:25.01927321197422,lng:121.4185380935669},{lat:25.01917599091676,lng:121.4155125617981},{lat:25.019409321325334,lng:121.41433238983154},{lat:25.018689884474526,lng:121.41330242156982},{lat:25.018709328769184,lng:121.41207933425903},{lat:25.01937043295471,lng:121.4122724533081},{lat:25.019564874684676,lng:121.41139268875122},{lat:25.02084818237839,lng:121.41049146652222},{lat:25.020984289983225,lng:121.40969753265381},{lat:25.021003733914462,lng:121.40819549560547},{lat:25.022617569470086,lng:121.4063286781311},{lat:25.02335642686042,lng:121.40525579452515},{lat:25.023998062564768,lng:121.40418291091919},{lat:25.02493134487416,lng:121.403968334198},{lat:25.02582573376119,lng:121.40268087387085},{lat:25.026234039564386,lng:121.40143632888794},{lat:25.02699231816626,lng:121.40117883682251},{lat:25.02815889148186,lng:121.40160799026489},{lat:25.02907269949976,lng:121.40085697174072},{lat:25.030005943217677,lng:121.39832496643066},{lat:25.030705871348104,lng:121.39845371246338},{lat:25.031250257133674,lng:121.39806747436523},{lat:25.03152244912069,lng:121.39841079711914},{lat:25.03148356458808,lng:121.39877557754517},{lat:25.034905356282174,lng:121.39909744262695},{lat:25.034516521123315,lng:121.40132904052734},{lat:25.03684951358938,lng:121.40098571777344},{lat:25.041593128099265,lng:121.39102935791016},{lat:25.043614940813352,lng:121.39283180236816},{lat:25.043673261839306,lng:121.3973593711853},{lat:25.042856764951786,lng:121.39954805374146},{lat:25.043381656432114,lng:121.40053510665894},{lat:25.044159269310313,lng:121.3983678817749},{lat:25.04485911668455,lng:121.40100717544556},{lat:25.045325679381627,lng:121.40411853790283},{lat:25.044820236379632,lng:121.40639305114746},{lat:25.04427591081672,lng:121.40883922576904},{lat:25.042973407697133,lng:121.41038417816162},{lat:25.042409633400165,lng:121.410813331604},{lat:25.038871404502395,lng:121.41250848770142},{lat:25.035896880358834,lng:121.41368865966797},{lat:25.033583311713762,lng:121.41791582107544},{lat:25.03231957932333,lng:121.41757249832153},{lat:25.030550332108614,lng:121.41677856445312},{lat:25.030161483147243,lng:121.41828060150146},{lat:25.028761616683173,lng:121.4210057258606},{lat:25.029597649964444,lng:121.42158508300781},{lat:25.02957820739469,lng:121.42197132110596},{lat:25.03014204066685,lng:121.42220735549927},{lat:25.029208797984012,lng:121.42328023910522},{lat:25.029869845617544,lng:121.42564058303833},{lat:25.03010315569677,lng:121.42619848251343},{lat:25.03167798712788,lng:121.42420291900635},{lat:25.033408334159187,lng:121.42619848251343},{lat:25.035974646614175,lng:121.42866611480713},{lat:25.039201902732373,lng:121.43083333969116},{lat:25.039143579580028,lng:121.43145561218262},{lat:25.04118487341023,lng:121.43263578414917},{lat:25.038813081192878,lng:121.43664836883545},{lat:25.04299284814388,lng:121.4372706413269},{lat:25.041476484041063,lng:121.44036054611206},{lat:25.041884737759364,lng:121.44057512283325},{lat:25.04205970322259,lng:121.44201278686523},{lat:25.045811680303338,lng:121.4417552947998},{lat:25.046880875550418,lng:121.44053220748901},{lat:25.047775104415294,lng:121.44181966781616},{lat:25.049135874956402,lng:121.44203424453735},{lat:25.053256973596127,lng:121.4398455619812},{lat:25.055783993855464,lng:121.43851518630981},{lat:25.056697596048732,lng:121.43963098526001},{lat:25.057377933683306,lng:121.44102573394775},{lat:25.05899129068987,lng:121.44390106201172},{lat:25.061421005134626,lng:121.448814868927},{lat:25.061809754974774,lng:121.45074605941772},{lat:25.06394785704784,lng:121.45280599594116},{lat:25.063597988352804,lng:121.45342826843262},{lat:25.063636862701586,lng:121.45447969436646},{lat:25.065191826538413,lng:121.45583152770996},{lat:25.068729295740496,lng:121.45922183990479},{lat:25.069953780508893,lng:121.46115303039551},{lat:25.06775747371945,lng:121.46591663360596},{lat:25.066960573908812,lng:121.46587371826172},{lat:25.065347321836605,lng:121.46522998809814},{lat:25.063792359973398,lng:121.46488666534424},{lat:25.061498755201324,lng:121.46535873413086},{lat:25.058816349390565,lng:121.46746158599854},{lat:25.056600404649767,lng:121.46733283996582},{lat:25.055609047977683,lng:121.46761178970337},{lat:25.053956769038034,lng:121.46844863891602},{lat:25.052596052010266,lng:121.46868467330933},{lat:25.051040928339393,lng:121.46782636642456},{lat:25.04843605199308,lng:121.46724700927734},{lat:25.04682255605009,lng:121.46711826324463},{lat:25.04443143265267,lng:121.46610975265503},{lat:25.04324557367146,lng:121.46602392196655},{lat:25.040718294958697,lng:121.46728992462158},{lat:25.03949351807811,lng:121.46767616271973}]
}
function getLocalStorageAsJson(name){
    return JSON.parse(localStorage.getItem(name))
}
function getCurrentPosition(){
    var current_position = { lat:Number((localStorage.getItem('position')).split(',')[0]) ,lng:Number((localStorage.getItem('position')).split(',')[1])}
    return current_position;
}
function createBubble(jplace){
    var nearIndustryDistribution = getLocalStorageAsJson('nearIndustryDistribution')
    var diameter
     if($(window).width()>=768){
        diameter =$(window).width()*0.4
    }else{
        diameter = $(window).width()*0.8
    }
    $(jplace).html("")
    var i=0, topsum=[]
    var format = d3.format(",d"),
        color = d3.scale.category20c();

    var bubble = d3.layout.pack()
        .sort(null)
        .size([diameter, diameter])
        .padding(1.5);

    var svg = d3.select("div#bubble").append("svg")
        .attr("width", diameter)
        .attr("height", diameter)
        .attr("class", "bubble");

    var tooltip = d3.select("body")
        .append("div")
        .style("position", "absolute")
        .style("z-index", "10")
        .style("visibility", "hidden")
        .style("color", "white")
        .style("padding", "8px")
        .style("background-color", "rgba(0, 0, 0, 0.75)")
        .style("border-radius", "6px")
        .style("font", "12px")
        .text("tooltip");
    // 符合舊code的資料格式
    for(var IndustryNo in nearIndustryDistribution){
        topsum[i]=(nearIndustryDistribution[IndustryNo])
        i++
    }
    var jsondata={"name":"root","children":[{"name":"零售","children":[{"name":"農產品","size":topsum[0]},{"name":"食品什貨","size":topsum[1]},{"name":"菸酒","size":topsum[2]},{"name":"服飾","size":topsum[3]}]},{"name":"家具五金","children":[{"name":"家具","size":topsum[4]},{"name":"五金","size":topsum[5]},{"name":"日用品","size":topsum[6]}]},{"name":"模具水器","children":[{"name":"模具","size":topsum[7]},{"name":"水電行","size":topsum[8]}]},{"name":"藥妝","children":[{"name":"清潔用品","size":topsum[9]},{"name":"化粧品","size":topsum[10]},{"name":"成藥","size":topsum[11]}]},{"name":"雜類","children":[{"name":"樂器","size":topsum[12]},{"name":"建材","size":topsum[13]},{"name":"首飾","size":topsum[22]}]},{"name":"3C","children":[{"name":"電器","size":topsum[14]},{"name":"電腦","size":topsum[15]},{"name":"電信","size":topsum[16]},{"name":"資訊軟體","size":topsum[23]},{"name":"電子材料","size":topsum[24]}]},{"name":"機械","children":[{"name":"機械器具","size":topsum[17]},{"name":"其他機械","size":topsum[18]}]},{"name":"汽機車","children":[{"name":"機車","size":topsum[19]},{"name":"汽機車零件","size":topsum[20]},{"name":"車胎","size":topsum[21]}]},{"name":"吃喝","children":[{"name":"便利商店","size":topsum[25]},{"name":"飲料店","size":topsum[26]},{"name":"餐館","size":topsum[27]}]},{"name":"服務","children":[{"name":"租賃","size":topsum[28]},{"name":"美容美髮","size":topsum[29]}]}]};

    d3.json("{{ asset('data/flare.json') }}", function(error, root) {
        root =jsondata;
        var node = svg.selectAll(".node")
            .data(bubble.nodes(classes(root))
            .filter(function(d) { return !d.children; }))
            .enter().append("g")
            .attr("class", "node")
            .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

        node.append("circle")
            .attr("r", function(d) { return d.r; })
            .style("fill", function(d) { return color(d.packageName); })
            .on("mouseover", function(d) {
              tooltip.text(d.className + ": " + format(d.value) + "家");
              tooltip.style("visibility", "visible");
            })
            .on("mousemove", function() {
                return tooltip.style("top", (d3.event.pageY-10)+"px").style("left",(d3.event.pageX+10)+"px");
            })
            .on("mouseout", function(){return tooltip.style("visibility", "hidden");});


        node.append("text")
            .text(function(d) { return d.className.substring(0, d.r / 3); })
            .style("text-anchor", "middle")
            .style("pointer-events", "none")
            .attr("font-size", (diameter * 0.002) + "em")
            .attr("dy", ".35em");
    });
    function classes(root) {
        var classes = [];
        function recurse(name, node) {
            if (node.children) node.children.forEach(function(child) { recurse(node.name, child); });
            else classes.push({packageName: name, className: node.name, value: node.size});
        }
        recurse(null, root);
        return {children: classes};
    }
    d3.select(self.frameElement).style("height", diameter + "px");
}
function createNearRentTable(place, nearRents){
    for(var i=0; i<nearRents.length; i++){
        var no =i+1
        $(place).append('<tr><th scope="row">'+no+
            '</th><td>'+nearRents[i].man+
            '</td><td>'+nearRents[i].address+
            '</td><td>'+nearRents[i].price+
            '</td><td>'+nearRents[i].title+
            '</td></tr>')
    }
} 
function createRawMap(place, current_position){
    return map = new google.maps.Map(document.getElementById(place), {
        center:current_position,
        zoom: 15,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
    });
}
function createCircle(map, current_position){
    return new google.maps.Circle({
        map: map,
        center: current_position,
        strokeColor: '#FF0000',
        strokeOpacity: 0.75,
        strokeWeight: 1,
        radius:500,   //unit metres 
        fillColor: '#AA0000',
        fillOpacity: 0.10,
    });
}
function createPolygon(Path){
    return new google.maps.Polygon({
        paths: Path,
        strokeColor: '#949494',
        strokeOpacity: 0.2,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.1
    });
}
function createGeocoder(){
    return new google.maps.Geocoder()
}
function addMarker(location, map, draggable=false) {
    var marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: location,
    });
    return marker
}
function addNumberMarker(location, map, no) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='+no+'|FE6256|000000'
    });
}
function createCircleMap(place, current_position,radius){
    var map = createRawMap(place, current_position, radius)
    addMarker(current_position, map)
    createCircle(map, current_position);
}
function createRentMap(place, current_position, radius, nearRents){
    var map = createRawMap(place, current_position, radius)
    createCircle(map, current_position);
    for(var i=0; i<nearRents.length; i++){
        var no = (i+1).toString()
        var location = {lat: Number(nearRents[i].lat) , lng: Number(nearRents[i].lng)}
        addNumberMarker(location, map, no)
    }
}
function createSearchMap(place, current_position, path){
    var map = createRawMap(place, current_position)
    createPolygon(path).setMap(map);
    var marker = addMarker(current_position, map, true)
    google.maps.event.addListener(marker, 'dragend', function (evt) {
        var point = marker.getPosition();
        
        map.panTo(point);
        refreshPosition(point)
    });
}
function createStoresMap(place, current_position, radius, recommendedstores){
    var map = createRawMap(place, current_position, radius)
    createCircle(map, current_position);
    addMarker(current_position, map)
    for(var i=0; i<recommendedstores.length; i++){
        var no = (i+1).toString()
        var location = {lat: Number(recommendedstores[i].lat) , lng: Number(recommendedstores[i].lng)}
        addNumberMarker(location, map, no)
    }
}
function refreshPosition(position) {
    var geocoder = createGeocoder()
    geocoder.geocode({
        latLng: position
    }, function(responses) {
        if (responses && responses.length > 0) {
            var address= responses[0].formatted_address
            var bar_address,api_address
            if(address.slice(0,11) == "242台灣新北市新莊區"){
                bar_address = address.substring(5)
                api_address = address.substring(11)
            }
            document.getElementById('position').innerHTML =  position.toUrlValue(6)
            document.getElementById('address').innerHTML =  bar_address
            localStorage.setItem('position', position.toUrlValue());
            localStorage.setItem('address', api_address);


        } else {
            window.alert('好像哪裡錯了 請在試一次看看吧');
        }
    });
}
function changeLoadingButton(place){
    document.getElementById(place).innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...'
}

function landlord(){
    // Call an AJAX function to the proper page
    changeLoadingButton('set')

    var url = "landlord/latlng/"+localStorage.getItem('position')+"/address/"+localStorage.getItem('address')
    $.ajax(url, {
        method: "get",
        success: function (responses) {
            localStorage.setItem('nearIndustryDistribution',JSON.stringify(responses['nearIndustryDistribution']))
            localStorage.setItem('recommendedIndustry',JSON.stringify(responses['recommendedIndustry']))
            localStorage.setItem('nearRent',JSON.stringify(responses['nearRent']))
            document.location.href = '/landlordresult';
        }          
    });
}
function shopowner(){
    var Industry = $("#industry").children("option:selected").attr('value');
    changeLoadingButton("set")
    if(!Industry){
        alert("要選擇一個職業喔") 
        return
    }
    var url = "shopowner/latlng/"+localStorage.getItem('position')+"/address/"+localStorage.getItem('address')+"/industry/"+Industry
    $.ajax(url, {
        method: "get",
        success: function (responses) {
            console.log(responses)
            localStorage.setItem('recommendedstores',JSON.stringify(responses['recommendedstores']))
            localStorage.setItem('recommendedIndustry',JSON.stringify(responses['recommendedIndustry']))
            localStorage.setItem('nearRent',JSON.stringify(responses['nearRent']))
            document.location.href = '/shopownerresult';
        }          
    });
}
