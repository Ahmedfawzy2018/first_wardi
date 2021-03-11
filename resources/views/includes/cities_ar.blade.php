<option value="">{{ $langg->lang158 }}</option>
@if(Auth::check())
	
	<option value="Riyadh" {{ Auth::user()->city == 'Riyadh' ? 'selected' : '' }}>الرياض</option>
	<option value="Jeddah" {{ Auth::user()->city == 'Jeddah' ? 'selected' : '' }}>جدة</option>	
	<option value="Mecca" {{ Auth::user()->city == 'Mecca' ? 'selected' : '' }}>مكة المكرمة</option>	
	<option value="Medina" {{ Auth::user()->city == 'Medina' ? 'selected' : '' }}>المدينه المنوره</option>	
	<option value="Ad Dammām" {{ Auth::user()->city == 'Ad Dammām' ? 'selected' : '' }}>الدمام</option>	
	<option value="Al Hufuf" {{ Auth::user()->city == 'Al Hufuf' ? 'selected' : '' }}>الهفوف</option>	
	<option value="Buraydah" {{ Auth::user()->city == 'Buraydah' ? 'selected' : '' }}>بريده</option>	
	<option value="Al Hillah" {{ Auth::user()->city == 'Al Hillah' ? 'selected' : '' }}>الهلال</option>	
	<option value="At Taif" {{ Auth::user()->city == 'At Taif' ? 'selected' : '' }}>الطائف</option>	
	<option value="Tabuk" {{ Auth::user()->city == 'Tabuk' ? 'selected' : '' }}>تبوك
</option>	
	<option value="Khamis Mushayt" {{ Auth::user()->city == 'Khamis Mushayt' ? 'selected' : '' }}>خميس مشيط</option>	
	<option value="Hail" {{ Auth::user()->city == 'Hail' ? 'selected' : '' }}>هيل</option>	
	<option value="Al Qatif" {{ Auth::user()->city == 'Al Qatif' ? 'selected' : '' }}>القطيف</option>	
	<option value="Al Mubarraz" {{ Auth::user()->city == 'Al Mubarraz' ? 'selected' : '' }}>المظهره</option>	
	<option value="Al Kharj" {{ Auth::user()->city == 'Al Kharj' ? 'selected' : '' }}>الخرج</option>	
	<option value="Najrān" {{ Auth::user()->city == 'Najrān' ? 'selected' : '' }}>نجران</option>	
	<option value="Abha" {{ Auth::user()->city == 'Abha' ? 'selected' : '' }}>ابها</option>	
	<option value="Arar" {{ Auth::user()->city == 'Arar' ? 'selected' : '' }}>عرعر</option>	
	<option value="Sakaka" {{ Auth::user()->city == 'Sakaka' ? 'selected' : '' }}>سكاكا</option>	
	<option value="Jazan" {{ Auth::user()->city == 'Jazan' ? 'selected' : '' }}>جازان</option>
	<option value="Al Bahah" {{ Auth::user()->city == 'Al Bahah' ? 'selected' : '' }}>الباحه</option>			
@else
	<option value="Riyadh" >الرياض</option>	
	<option value="Jeddah" >جدة</option>	
	<option value="Mecca" >مكة المكرمة</option>	
	<option value="Medina" >المدينه المنوره</option>	
	<option value="Ad Dammām" >الدمام</option>	
	<option value="Al Hufuf" >الهفوف</option>	
	<option value="Buraydah" >بريده</option>	
	<option value="Al Hillah" >الهلال</option>	
	<option value="At Taif" >الطائف</option>	
	<option value="Tabuk" >تبوك
</option>	
	<option value="Khamis Mushayt" >خميس مشيط</option>	
	<option value="Hail" >حائل</option>	
	<option value="Al Qatif" >القطيف</option>	
	<option value="Al Mubarraz" >المزهره</option>	
	<option value="Al Kharj" >الخرج</option>	
	<option value="Najrān" >نجران</option>	
	<option value="Abha" >ابها</option>	
	<option value="Arar" >عرعر</option>	
	<option value="Sakaka" >سكاكا</option>	
	<option value="Jazan" >جازان</option>
	<option value="Al Bahah" >الباحه</option>		

@endif



