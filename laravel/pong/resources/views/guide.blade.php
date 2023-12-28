@extends('layout.layout')

@section('content')
{{-- @include('partials._search') --}}


@section('content')
    
@endsection

<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            
<h1>Guide Page</h1>
    <p>This is the guide page content.</p>
    <!-- Additional content specific to the guide page goes here -->
    <div style="width: 1200px; height: 812px; position: relative; background: white">
        <div style="width: 1168px; height: 36px; left: 17px; top: 90px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
          <div style="text-align: center; color: black; font-size: 30px; font-family: Inter; font-weight: 600; word-wrap: break-word">Map</div>
        </div>
        <div style="width: 1200px; height: 83.50px; left: 1px; top: 725px; position: absolute">
          <div style="width: 1200px; height: 83.50px; left: 0px; top: 0px; position: absolute">
            <div style="width: 1200px; height: 83px; left: 0px; top: 0.50px; position: absolute">
              <div style="width: 1200px; height: 83px; left: 0px; top: 0px; position: absolute; background: #FAFAFA"></div>
            </div>
            <div style="height: 32px; left: 345px; top: 15px; position: absolute">
              <div style="width: 32px; height: 32px; left: 0px; top: 0px; position: absolute; background: #E8E8E8; border-radius: 100px"></div>
              <div style="width: 32px; height: 32px; left: 237px; top: 0px; position: absolute; background: #E8E8E8; border-radius: 100px"></div>
              <div style="width: 32px; height: 32px; left: 474px; top: 0px; position: absolute; background: #E8E8E8; border-radius: 100px"></div>
            </div>
            <div style="width: 1200px; height: 0.50px; left: 0px; top: 0.50px; position: absolute; background: #BDC5CD"></div>
          </div>
          <a href="/events"><img style="width: 56px; height: 56px; left: 330px; top: 15px; position: absolute" src="images/calendarlogo.png" /></a>
          <img style="width: 39px; height: 55px; left: 815px; top: 15px; position: absolute" src="images/location.png" />
        </div>
        <div style="width: 297px; height: 471px; left: 434px; top: 222px; position: absolute; background: white; border-radius: 4px; border: 1px #DFE1E2 solid; flex-direction: column; justify-content: space-between; align-items: flex-start; display: inline-flex">
          <div style="align-self: stretch; height: 396px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 1px; display: flex">
            <div style="align-self: stretch; padding-top: 24px; padding-bottom: 8px; padding-left: 24px; padding-right: 25px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
              <div style="flex: 1 1 0; color: #1B1B1B; font-size: 22px; font-family: Merriweather; font-weight: 700; word-wrap: break-word">One Center Point</div>
            </div>
            <img style="align-self: stretch; height: 162px" src="images/opc.jpeg" />
            <div style="align-self: stretch; padding-left: 24px; padding-right: 24px; padding-top: 8px; padding-bottom: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
              <div style="flex: 1 1 0"><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 700; text-decoration: underline; line-height: 25.92px; word-wrap: break-word">Address</span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word">: Pejabat Pos Universiti Teknologi Malaysia, G01, OPC, KOLEJ RAHMAN PUTRA, 81310 Skudai, Johor<br/></span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 700; text-decoration: underline; line-height: 25.92px; word-wrap: break-word">Hours</span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word">: Closed ⋅ Opens 9 am Mon<br/></span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 700; line-height: 25.92px; word-wrap: break-word">Phone</span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word">: </span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; text-decoration: underline; line-height: 25.92px; word-wrap: break-word">011-1868 7083</span></div>
            </div>
          </div>
          <div style="align-self: stretch; height: 75px; padding-top: 8px; padding-bottom: 24px; padding-left: 24px; padding-right: 24px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
            <div style="padding-left: 20px; padding-right: 20px; padding-top: 12px; padding-bottom: 12px; background: #005EA2; border-radius: 4px; overflow: hidden; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
              <a href="/"><div style="text-align: center; color: white; font-size: 16px; font-family: Public Sans; font-weight: 700; word-wrap: break-word">Click for Direction</div>
              </a></div>
          </div>
        </div>
        <div style="width: 297px; height: 471px; left: 60px; top: 222px; position: absolute; background: white; border-radius: 4px; border: 1px #DFE1E2 solid; flex-direction: column; justify-content: space-between; align-items: flex-start; display: inline-flex">
          <div style="align-self: stretch; height: 370px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 1px; display: flex">
            <div style="align-self: stretch; padding-top: 24px; padding-bottom: 8px; padding-left: 24px; padding-right: 25px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
              <div style="flex: 1 1 0; color: #1B1B1B; font-size: 22px; font-family: Merriweather; font-weight: 700; word-wrap: break-word">Masjid Sultan Ismail</div>
            </div>
            <img style="align-self: stretch; height: 162px" src="images/msi.jpeg" />
            <div style="align-self: stretch; padding-left: 24px; padding-right: 24px; padding-top: 8px; padding-bottom: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                <div style="flex: 1 1 0">
                    <span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 700; text-decoration: underline; line-height: 25.92px; word-wrap: break-word">
                        <a href="https://www.google.com/maps/place/Masjid+Sultan+Ismail,+Universiti+Teknologi+Malaysia/@1.5592644,103.637528,15z/data=!4m2!3m1!1s0x0:0x19dc872ddd924d1b?sa=X&ved=2ahUKEwiL3r7mr7CDAxVTzDgGHa-fDN0Q_BJ6BAgNEAA" target="_blank" style="color: inherit; text-decoration: inherit;">
                            Address
                        </a>
                    </span>
                    <span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word">
                        : Lingkaran Ilmu, Universiti Teknologi Malaysia, 81300 Skudai, Johor<br/>
                    </span>
                    <span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 700; text-decoration: underline; line-height: 25.92px; word-wrap: break-word">
                        Hours : <span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word">
                            24 Hours
                        </span><br/>
                    </span>
                    <span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 700; line-height: 25.92px; word-wrap: break-word">Phone</span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word">: </span><span style="color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; text-decoration: underline; line-height: 25.92px; word-wrap: break-word">011-1868 7083</span>
                    <!-- ... (Other spans) ... -->
                </div>
            </div>
          </div>
          <div style="align-self: stretch; height: 75px; padding-top: 8px; padding-bottom: 24px; padding-left: 24px; padding-right: 24px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
            <div style="padding-left: 20px; padding-right: 20px; padding-top: 12px; padding-bottom: 12px; background: #005EA2; border-radius: 4px; overflow: hidden; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
              <a href="/"><div style="text-align: center; color: white; font-size: 16px; font-family: Public Sans; font-weight: 700; word-wrap: break-word">Click for Direction</div>
            </a></div>
          </div>
        </div>
        <x-card>
        <div style="width: 297px; height: 471px; left: 806px; top: 222px; position: absolute; background: white; border-radius: 4px; border: 1px #DFE1E2 solid; flex-direction: column; justify-content: space-between; align-items: flex-start; display: inline-flex">
          <div style="align-self: stretch; height: 448px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 1px; display: flex">
            <div style="align-self: stretch; padding-top: 24px; padding-bottom: 8px; padding-left: 24px; padding-right: 25px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
              <div style="flex: 1 1 0; color: #1B1B1B; font-size: 22px; font-family: Merriweather; font-weight: 700; word-wrap: break-word">Arked Meranti</div>
            </div>
            <img style="align-self: stretch; height: 162px" src="images/arked meranti.jpeg" />
            <div style="align-self: stretch; padding-left: 24px; padding-right: 24px; padding-top: 8px; padding-bottom: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
              <div style="flex: 1 1 0; color: #1B1B1B; font-size: 16px; font-family: Public Sans; font-weight: 400; line-height: 25.92px; word-wrap: break-word"><br/>Meranti Food Court, UTM4.1 (1,438)·Food court<br/>Closed ⋅ Opens 7 am Fri<br/>Meranti Food Court, UTM<br/>Jalan Meranti<br/>Closed ⋅ Opens 7 am Fri<br/>Dine-in·Takeaway</div>
            </div>
          </div>
          <div style="align-self: stretch; height: 75px; padding-top: 8px; padding-bottom: 24px; padding-left: 24px; padding-right: 24px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
            <div style="padding-left: 20px; padding-right: 20px; padding-top: 12px; padding-bottom: 12px; background: #005EA2; border-radius: 4px; overflow: hidden; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
              <div style="text-align: center; color: white; font-size: 16px; font-family: Public Sans; font-weight: 700; word-wrap: break-word">Click for Direction</div>
            </div>
          </div>
        </div>
        </x-card>
        <div style="width: 1168px; height: 50px; left: 17px; top: 149px; position: absolute">
            <div style="width: 1168px; height: 50px; left: 0px; top: 0px; position: absolute; background: #5DB075; border-radius: 100px; border: 1px #5DB075 solid">
                <input type="text" placeholder="Search" style="width: 100%; height: 100%; padding: 0 20px; border: none; outline: none; background: transparent; color: #fff; border-radius: 100px;">
            </div>
          
        </div>
        <div style="width: 347px; height: 114px; left: 427px; top: -6px; position: absolute; text-align: center; color: black; font-size: 40px; font-family: Black Han Sans; font-weight: 400; word-wrap: break-word">UTMVenture</div>
      </div>
    
@section('guide')
    <h2>Guide Section in Layout</h2>
    <p>This content is included in the layout under the guide section.</p>
    <!-- Additional content specific to the guide section goes here -->
@endsection

