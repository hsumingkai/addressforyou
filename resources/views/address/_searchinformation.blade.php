<div class="col-12 col-md-5 mt-4">
    <div class="card border-white border-right">
        @if ($type == "shopowner")
            <div class="form-group">
            <label for="exampleFormControlSelect1">
                <h2>選一個你想要開的店吧</h2>
            </label>
                <select id="industry" class="form-control" id="exampleFormControlSelect1">
                    <option value="">職業</option>
                    <option value="F201010">農產品</option>
                    <option value="F203010">食品什貨</option>
                    <option value="F203020">菸酒</option>
                    <option value="F204110">服飾</option>
                    <option value="F205040">家具</option>
                    <option value="F206010">五金</option>
                    <option value="F206020">日常用品</option>
                    <option value="F206030">模具</option>
                    <option value="F206040">水電行</option>
                    <option value="F207030">清潔用品</option>
                    <option value="F208040">化粧品</option>
                    <option value="F208050">成藥</option>
                    <option value="F209060">樂器</option>
                    <option value="F211010">建材</option>
                    <option value="F213010">電器</option>
                    <option value="F213030">電腦</option>
                    <option value="F213060">電信</option>
                    <option value="F213080">機械器具</option>
                    <option value="F213990">其他機械</option>
                    <option value="F214020">機車</option>
                    <option value="F214030">汽機車零件</option>
                    <option value="F214050">車胎</option>
                    <option value="F215010">首飾</option>
                    <option value="F218010">資訊軟體</option>
                    <option value="F219010">電子材料</option>
                    <option value="F399010">便利商店</option>
                    <option value="F501030">飲料店</option>
                    <option value="F501060">餐館</option>
                    <option value="JE01010">租賃</option>
                    <option value="JZ99080">美容美髮</option>

                </select>
            </div>
            我有一條記錄！
        @else
        @endif
        <h4 class="card-header font-weight-bold address-yellow">你所選的位置</h4>
        <div class="card-body font-weight-bolder ">
            <div class="text-secondary">
                <p class="card-text h5 font-weight-bolder pb-2">座標(Lat,Lng):</p>
                <p id="position" class="card-text h5 font-weight-bolder pl-4 pb-2">...</p>
                <p class="card-text h5 font-weight-bolder pb-2">地址:</p>
                <p id="address" class="card-text h5 font-weight-bolder pl-4 pb-2">...</p>
            </div>
            <div class="text-right mt-4">
                <a id="set"href="#" class="btn btn-outline-dark font-weight-bold ">送出</a>
            </div>
        </div>
    </div>
</div>

