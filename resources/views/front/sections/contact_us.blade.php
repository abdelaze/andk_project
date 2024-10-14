<div id="TpdMbDQZrFO66T5k4dTTfRx9LnMZvu2t" class="widget widget-section ">
    <div class="row">

        <div class="container ">

            <form id="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc" method="POST" action="{{ route('contact_us.store') }}" class="widget contact" >
                @csrf

                <div id="L4owSxFNBa5fT95ot8M8xJ58ahugSTbx" class="widget widget-container clearfix"><label
                        id="xLUroGfU46Tg45uFck2WTE8xphxdQTGA"
                        class="widget widget-text widget-regular-label widget-label"
                        for="FDTLGthaB8vnDXuopQvBgUfKK2qUBPDF">الأسم الرباعي</label>
                        <input
                        class="widget widget-input-text" id="FDTLGthaB8vnDXuopQvBgUfKK2qUBPDF" type="text"
                        subtype="name" placeholder="الأسم الرباعي" parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc"
                        name="full_name" value="{{ old('full_name') }}" required>
                </div>

                <div id="identity_number" class="widget widget-container clearfix"><label
                    id="identity_number_label"
                    class="widget widget-text widget-regular-label widget-label"
                    for="identity_number"> رقم الهويه </label>
                    <input
                    class="widget widget-input-text" id="identity_number_input" type="text"
                    subtype="identity_number" placeholder="رقم الهويه" parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc"
                    name="identity_number" value="{{ old('identity_number') }}" required>
                 </div>



                 <div id="email" class="widget widget-container clearfix"><label
                    id="email_label"
                    class="widget widget-text widget-regular-label widget-label"
                    for="email"> البريد الالكترونى  </label>
                    <input
                    class="widget widget-input-text" id="email_input" type="text"
                    subtype="email" placeholder="البريد الالكترونى" parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc"
                    name="email" value="{{ old('email') }}" required>
                 </div>


                 <div id="bank_iban" class="widget widget-container clearfix"><label
                    id="bank_iban_label"
                    class="widget widget-text widget-regular-label widget-label"
                    for="bank_iban">  الحساب المصرفي الدولي (IBAN)  </label>
                    <input
                    class="widget widget-input-text" id="bank_iban_input" type="text"
                    subtype="bank_iban" placeholder="IBAN" parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc"
                    name="bank_iban" value="{{ old('bank_iban') }}" required>
                 </div>



                 <div id="bank_name" class="widget widget-container clearfix"><label
                    id="bank_name_label"
                    class="widget widget-text widget-regular-label widget-label"
                    for="bank_name">  اسم البنك </label>
                    <input
                    class="widget widget-input-text" id="bank_name_input" type="text"
                    subtype="bank_name" placeholder="اسم البنك" parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc"
                    name="bank_name" value="{{ old('bank_name') }}" required>
                 </div>


                <div id="azvrDNoD21NhEWt8ZUimn5eebOvQKXTN" class="widget widget-container clearfix"><label
                        id="ros9WwwWCrdn44tMe73TVa3cvuVZbzg5"
                        class="widget widget-text widget-regular-label widget-label"
                        for="aoiOVrlaWcMMqxclGxrKTRLCFX77w8H6">رقم الجوال</label>
                        <input class="widget widget-input-text"
                        id="aoiOVrlaWcMMqxclGxrKTRLCFX77w8H6" type="tel" subtype="phone" placeholder="05555555555"
                        parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc" name="mobile_number" value="{{ old('mobile_number') }}" required></div>
                <div id="riuxoD0dcwdErIgbfLNJghuruWk01fae" class="widget widget-container clearfix"><label
                        id="WUp3Sh2bdkPDTwnaZPG07JFUJpbRxTGK"
                        class="widget widget-text widget-regular-label widget-label"
                        for="daypVuqoDT0uP46LCWrlok8PifCMiO5b">المدينة</label>
                        <textarea class="widget widget-textarea" id="daypVuqoDT0uP46LCWrlok8PifCMiO5b" subtype="address" placeholder="المدينة" parentid="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc" name="city" required>

                        </textarea>
                </div>
                <div id="yT2SDyxSkcmJTWRy6XXrTecViSuNoLPp" class="widget widget-container clearfix"><label
                        id="Nr78u3mwfHNfa1p7DHfhJxJbsdT6WG0w"
                        class="widget widget-text widget-regular-label widget-label"
                        for="xTktBphEAbahZJCc7Pivrina13aBTA01">عدد الأسهم المرغوب حجزها السهم سعره 200 ريال</label>
                        <input
                        class="widget  widget-input-text" id="xTktBphEAbahZJCc7Pivrina13aBTA01" type="number"
                        subtype="number" min="2000"
                        parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc" name="stocks" value="{{ old('stocks') }}"
                        onkeydown="return event.keyCode !== 69" required></div>
                <div id="imRHRtvcsd7Ns3qsg6mteEs3CwAnxTqh" class="widget widget-container clearfix"><label
                        id="FxHStTT7hS38IfGoSr8gQZd6RSMGIS7z"
                        class="widget widget-text widget-regular-label widget-label"
                        for="QzuWrJvDkuG0JhCMQTfshELTuwyuOTs5">الملاحظات</label>
                    <textarea class="widget widget-textarea" id="QzuWrJvDkuG0JhCMQTfshELTuwyuOTs5" placeholder="الملاحظات ان وجدت"
                        parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc" name="notes" value="{{ old('notes') }}">
                    </textarea>
                </div>
                <div id="mZ8twlf1qipu4NnUx4DVLVe61czlGDPf"
                    class="widget widget-container input-button-container clearfix">
                    <button
                        class="widget widget-input-button" type="submit" id="O3BhnaWB8WZuWqM2WfsSq5CtizczZoag"
                        parentId="Z8n76ObgT82045HdcPp9dCqJJJyyMUBc">
                        <div class="widget-overlay"></div>ارسل طلب المساهمة
                    </button>
                </div>


            </form>

            <img id="K5lytCWgZHrM1tmMMh4bfGLdSz0UJDTS"
                data-original="https://images.assets-landingi.com/uc/d0c12c63-0108-4d80-94f1-15829cda9861/ADpng.jpg"
                class="widget widget-image lazyload"
                data-srcset="{{ url('public/uploads/settings/images') . '/' . @$contact_us_image }},  https://cdn.lugc.link/d0c12c63-0108-4d80-94f1-15829cda9861/-/preview/273x414/-/format/auto/ 273w"
                data-sizes="(max-width: 763px) 273px,   273px"
                data-src="https://cdn.lugc.link/d0c12c63-0108-4d80-94f1-15829cda9861/-/preview/273x414/-/format/auto/"
                alt="Image" width="273" height="414" decoding="async">
            <div id="wsTeqXnNcE6TAJWzBJWTKKJwcmX4mvuH" class="widget widget-text">
                <p><span style="color: rgb(53, 245, 119); font-weight: bold;">تقديم طلب مساهمة</span></p>
            </div>
        </div>
    </div>
</div>
