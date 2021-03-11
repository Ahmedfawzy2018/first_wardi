<option value="">{{ $langg->lang158 }}</option>
@if(Auth::check())
	
	<option value="Riyadh" {{ Auth::user()->city == 'Riyadh' ? 'selected' : '' }}>Riyadh</option>
	<option value="Jeddah" {{ Auth::user()->city == 'Jeddah' ? 'selected' : '' }}>Jeddah</option>	
	<option value="Mecca" {{ Auth::user()->city == 'Mecca' ? 'selected' : '' }}>Mecca</option>	
	<option value="Medina" {{ Auth::user()->city == 'Medina' ? 'selected' : '' }}>Medina</option>	
	<option value="Ad Dammām" {{ Auth::user()->city == 'Ad Dammām' ? 'selected' : '' }}>Ad Dammam</option>	
	<option value="Al Hufuf" {{ Auth::user()->city == 'Al Hufuf' ? 'selected' : '' }}>Al Hufuf</option>	
	<option value="Buraydah" {{ Auth::user()->city == 'Buraydah' ? 'selected' : '' }}>Buraydah</option>	
	<option value="Al Hillah" {{ Auth::user()->city == 'Al Hillah' ? 'selected' : '' }}>Al Al Hillah</option>	
	<option value="At Taif" {{ Auth::user()->city == 'At Taif' ? 'selected' : '' }}>At Taif</option>	
	<option value="Tabuk" {{ Auth::user()->city == 'Tabuk' ? 'selected' : '' }}>Tabuk</option>	
	<option value="Khamis Mushayt" {{ Auth::user()->city == 'Khamis Mushayt' ? 'selected' : '' }}>Khamis Mushayt</option>	
	<option value="Hail" {{ Auth::user()->city == 'Hail' ? 'selected' : '' }}>Hail</option>	
	<option value="Al Qatif" {{ Auth::user()->city == 'Al Qatif' ? 'selected' : '' }}>Al Qatif</option>	
	<option value="Al Mubarraz" {{ Auth::user()->city == 'Al Mubarraz' ? 'selected' : '' }}>Al Mubarraz</option>	
	<option value="Al Kharj" {{ Auth::user()->city == 'Al Kharj' ? 'selected' : '' }}>Al Kharj</option>	
	<option value="Najrān" {{ Auth::user()->city == 'Najrān' ? 'selected' : '' }}>Najran</option>	
	<option value="Abha" {{ Auth::user()->city == 'Abha' ? 'selected' : '' }}>Abha</option>	
	<option value="Arar" {{ Auth::user()->city == 'Arar' ? 'selected' : '' }}>Arar</option>	
	<option value="Sakaka" {{ Auth::user()->city == 'Sakaka' ? 'selected' : '' }}>Sakaka</option>	
	<option value="Jazan" {{ Auth::user()->city == 'Jazan' ? 'selected' : '' }}>Jazan</option>
	<option value="Al Bahah" {{ Auth::user()->city == 'Al Bahah' ? 'selected' : '' }}>Al Bahah</option>			
@else
	<option value="Riyadh" >Riyadh</option>	
	<option value="Jeddah" >Jeddah</option>	
	<option value="Mecca" >Mecca</option>	
	<option value="Medina" >Medina</option>	
	<option value="Ad Dammām" >Ad Dammam</option>	
	<option value="Al Hufuf" >Al Hufuf</option>	
	<option value="Buraydah" >Buraydah</option>	
	<option value="Al Hillah" >Al Hillah</option>	
	<option value="At Taif" >At Taif</option>	
	<option value="Tabuk" >Tabuk</option>	
	<option value="Khamis Mushayt" >Khamis Mushayt</option>	
	<option value="Hail" >Hail</option>	
	<option value="Al Qatif" >Al Qatif</option>	
	<option value="Al Mubarraz" >Al Mubarraz</option>	
	<option value="Al Kharj" >Al Kharj</option>	
	<option value="Najrān" >Najran</option>	
	<option value="Abha" >Abha</option>	
	<option value="Arar" >Arar</option>	
	<option value="Sakaka" >Sakaka</option>	
	<option value="Jazan" >Jazan</option>
	<option value="Al Bahah" >Al Bahah</option>		

@endif



