<table style="table-layout:fixed;vertical-align:top;min-width:320px;margin:0 auto;border-spacing:0;border-collapse:collapse;background-color:#ffffff;width:100%" role="presentation" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tbody>
  <tr style="vertical-align:top" valign="top">
  <td style="word-break:break-word;vertical-align:top;border-collapse:collapse" valign="top">

  <div style="background-color:transparent">
  <div style="margin:0 auto;min-width:320px;max-width:640px;word-wrap:break-word;word-break:break-word;background-color:#fff">
  <div style="border-collapse:collapse;display:table;width:100%;background-color:#fff">
  
  
  
  <div style="min-width:320px;max-width:640px;display:table-cell;vertical-align:top">
  <div style="width:100%!important">
  
  
  <div style="border:0px solid transparent;padding:5px 0px 5px 0px">
  
  <div style="color:#000;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:150%;padding:30px 100px 10px 100px">
  <div style="font-size:12px;line-height:18px;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;color:#000">
  <p style="font-size:12px;line-height:16px;margin:0"><span style="font-size:11px">Xin
  chào <strong>{{$infoUser['name_buyer']}}</strong> , </span></p>
  <p style="font-size:12px;line-height:16px;margin:0"><span style="font-size:11px">Xin thông báo đã nhận được đơn đặt hàng mang mã số <span style="color:#f15f2e;line-height:16px;font-size:11px"><strong><a style="text-decoration:underline;color:#f15f2e" rel="noopener noreferrer">#{{$infoUser['code_order']}}</a></strong></span> của bạn. </span></p>
  <p style="font-size:12px;line-height:16px;margin:0"><span style="font-size:11px">Dưới
  đây là thông tin đơn hàng, bạn có thể xem chi tiết đơn hàng của mình ở phần dưới.</span></p>
  
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
      <div style="background-color:transparent">
      <div style="Margin:0 auto;width:640px;word-wrap:break-word;word-break:break-word;background-color:#fff">
              <div style="border-collapse:collapse;display:table;width:100%;background-color:#fff">
                  
                  
  
  
                  <div style="width:640px;display:table-cell;vertical-align:top">
                      <div style="width:100%!important">
                          
                          <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:5px;padding-bottom:5px;padding-right:50px;padding-left:50px">
                              
                              
                              <div style="color:#231f20;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:120%;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px">
                                  <div style="font-size:12px;line-height:14px;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;color:#231f20">
                                      <p style="font-size:14px;line-height:16px;margin:0"><span style="color:#000000;font-size:14px;line-height:16px"><strong>CHI TIẾT ĐƠN
                                  HÀNG</strong></span></p>
                                  </div>
                              </div>
                                                          
                              
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;min-width:100%" valign="top" width="100%">
                                  <tbody>
                                  <tr style="vertical-align:top" valign="top">
                                      <td style="word-break:break-word;vertical-align:top;min-width:100%;padding-top:10px;padding-right:50px;padding-bottom:10px;padding-left:50px;border-collapse:collapse" valign="top">
                                          <table align="center" border="0" cellpadding="0" cellspacing="0" height="0" role="presentation" style="table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;width:100%;border-top:2px solid #000;height:0px" valign="top" width="100%">
                                              <tbody>
                                              <tr style="vertical-align:top" valign="top">
                                                  <td height="0" style="word-break:break-word;vertical-align:top;border-collapse:collapse" valign="top"><span></span></td>
                                              </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                              
  
                                                              
                                  <div style="font-size:16px;text-align:center;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif">
                                      <div style="padding:10px 50px">
                                          <table style="width:100%;height:90px;font-size:10px;color:#939598;border-spacing:0px;border-collapse:collapse">
                                              <tbody>
                                                @php
                                                    $tongcong = 0;
                                                @endphp
                                                @foreach ($detailsOrders as $item)
                                                    
                                                <tr>
                                                  <td style="width:100px;text-align:left">
                                                      <img style="width:80px;height:80px" src="{{$message->embed(public_path().'/uploads/' .$item['img_product'])}}" class="CToWUd a6T" data-bit="iit" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 679px; top: 423.531px;"><span data-is-tooltip-wrapper="true" class="a5q" jsaction="JIbuQc:.CLIENT"><button class="VYBDae-JX-I VYBDae-JX-I-ql-ay5-ays CgzRE" jscontroller="PIVayb" jsaction="click:h5M12e; clickmod:h5M12e;pointerdown:FEiYhc;pointerup:mF5Elf;pointerenter:EX0mI;pointerleave:vpvbp;pointercancel:xyn4sd;contextmenu:xexox;focus:h06R8; blur:zjh6rb;mlnRJb:fLiPzd;" data-idom-class="CgzRE" jsname="hRZeKc" aria-label="Tải xuống tệp đính kèm " data-tooltip-enabled="true" data-tooltip-id="tt-c37" data-tooltip-classes="AZPksf" id="" jslog="91252; u014N:cOuCgd,Kr2w4b,xr6bB; 4:WyIjbXNnLWY6MTc0ODA5MzE4ODUzODIzNDA1NSJd; 43:WyJpbWFnZS9qcGVnIl0."><span class="OiePBf-zPjgPe VYBDae-JX-UHGRz"></span><span class="bHC-Q" data-unbounded="false" jscontroller="LBaJxb" jsname="m9ZlFb" soy-skip="" ssk="6:RWVI5c"></span><span class="VYBDae-JX-ank-Rtc0Jf" jsname="S5tZuc" aria-hidden="true"><span class="bzc-ank" aria-hidden="true"><svg height="20" viewBox="0 -960 960 960" width="20" focusable="false" class=" aoH"><path d="M480-336 288-528l51-51 105 105v-342h72v342l105-105 51 51-192 192ZM263.72-192Q234-192 213-213.15T192-264v-72h72v72h432v-72h72v72q0 29.7-21.16 50.85Q725.68-192 695.96-192H263.72Z"></path></svg></span></span><div class="VYBDae-JX-ano"></div></button><div class="ne2Ple-oshW8e-J9" id="tt-c37" role="tooltip" aria-hidden="true">Tải xuống</div></span></div>
                                                  </td>
                                                  <td style="text-align:left">
                                                      <table style="width:100%;margin-bottom:30px;border-spacing:0px;border-collapse:collapse">
                                                          <tbody><tr>
                                                              <td style="font-size:14px;font-weight:bold;vertical-align:top">
                                                                  {{$item->name_product}}                                                       </td>
                                                          </tr>
                                                                                                                  <tr>
                                                              <td style="height:10px">
                                                                  <b>Size:</b>&nbsp;&nbsp;{{$item->size}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td style="height:10px"><b>Số
                                                                      lượng:</b>&nbsp;&nbsp;{{$item->quantity}}</td>
                                                          </tr>
                                                          <tr>
                                                                <td style="height:10px">
                                                                    <b>Giá:</b> {{$item->price_one_product}} VND                                                                   VND
                                                                </td>
                                                            </tr>
                                                      </tbody></table>
                                                  </td>
                                                  <td style="width:100px;text-align:right;vertical-align:top;font-size:11px;font-weight:bold;padding-top:4px">
                                                      {{$item->total_price}} VND
                                                  </td>
                                                </tr>
                                                    @php
                                                    $tongcong += $item['total_price'];
                                                    @endphp
                                                @endforeach
                                          </tbody></table>
                                      </div>
                                  </div>
                                  
  
                                  
                              
                              
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;min-width:100%" valign="top" width="100%">
                                  <tbody>
                                  <tr style="vertical-align:top" valign="top">
                                      <td style="word-break:break-word;vertical-align:top;min-width:100%;padding-top:10px;padding-right:50px;padding-bottom:10px;padding-left:50px;border-collapse:collapse" valign="top">
                                          <table align="center" border="0" cellpadding="0" cellspacing="0" height="0" role="presentation" style="table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;width:100%;border-top:2px solid #000;height:0px" valign="top" width="100%">
                                              <tbody>
                                              <tr style="vertical-align:top" valign="top">
                                                  <td height="0" style="word-break:break-word;vertical-align:top;border-collapse:collapse" valign="top"><span></span></td>
                                              </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                              
  
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  
              </div>
          </div>
      </div>
      <div style="background-color:transparent">
          <div style="Margin:0 auto;width:640px;word-wrap:break-word;word-break:break-word;background-color:#fff">
              <div style="border-collapse:collapse;display:table;width:100%;background-color:#fff">
                  
                  
                  <div style="min-width:320px;max-width:320px;display:table-cell;vertical-align:top">
                      <div style="width:100%!important">
                          
                          <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:30px;padding-right:0px;padding-left:50px">
                              
                              
  
                              <div style="color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:150%;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:50px">
                                  <div style="font-size:12px;line-height:18px;color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif">
                                      <p style="font-size:14px;line-height:16px;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px">Tổng
                                    giá trị đơn hàng: </span></strong></span></p>
                                      <p style="font-size:14px;line-height:16px;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px">Khuyến
                                    mãi: </span></strong></span></p>
                                      <p style="font-size:14px;line-height:16px;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px">Phí vận
                                    chuyển: </span></strong></span></p>
                                      <p style="font-size:14px;line-height:16px;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px">Phí thanh toán: </span></strong></span></p>
                                      <p style="font-size:14px;line-height:21px;margin:0"><span style="color:#f15f2e;font-size:14px;line-height:21px"><strong>Tổng thanh
                                  toán:</strong></span></p>
                                  </div>
                              </div>
                              
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  
                  <div style="min-width:320px;max-width:320px;display:table-cell;vertical-align:top">
                      <div style="width:100%!important">
                          
                          <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:50px;padding-left:0px">
                              
                              
                                                          <div style="color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:150%;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:0px">
                                  <div style="font-size:12px;line-height:18px;color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif">
                                        @php
                                            $formatted_tongcong = number_format($tongcong, 0, ',', '.');
                                        @endphp
                                      <p style="font-size:14px;line-height:16px;text-align:right;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px">{{$formatted_tongcong}} VND</span></strong></span>
                                      </p>
                                      <p style="font-size:14px;line-height:16px;text-align:right;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px"> 0																	VND</span></strong></span></p>
                                      <p style="font-size:14px;line-height:16px;text-align:right;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px"> 0																	VND</span></strong></span></p>
                                      <p style="font-size:14px;line-height:16px;text-align:right;margin:0"><span style="font-size:11px"><strong><span style="line-height:16px;font-size:11px"> 0                                                    VND</span></strong></span></p>
                                      <p style="font-size:14px;line-height:21px;text-align:right;margin:0"><span style="color:#f15f2e;font-size:14px;line-height:21px"><strong> {{$formatted_tongcong}}																VND</strong></span></p>
                                  </div>
                              </div>
                              
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  
              </div>
          </div>
      </div>
      <div style="background-color:transparent">
          <div style="Margin:0 auto;width:640px;word-wrap:break-word;word-break:break-word;background-color:#fff">
              <div style="border-collapse:collapse;display:table;width:100%;background-color:#fff">
                  
                  
                  <div style="width:640px;display:table-cell;vertical-align:top">
                      <div style="width:100%!important">
                          
                          <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:50px;padding-left:50px">
                              
                              
                              <div style="color:#231f20;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:120%;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px">
                                  <div style="font-size:12px;line-height:14px;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;color:#231f20">
                                      <p style="font-size:14px;line-height:16px;margin:0"><strong>THÔNG TIN GIAO
                                              NHẬN</strong>
                                      </p>
                                  </div>
                              </div>
                              
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;min-width:100%" valign="top" width="100%">
                                  <tbody>
                                  <tr style="vertical-align:top" valign="top">
                                      <td style="word-break:break-word;vertical-align:top;min-width:100%;padding-top:10px;padding-right:50px;padding-bottom:10px;padding-left:50px;border-collapse:collapse" valign="top">
                                          <table align="center" border="0" cellpadding="0" cellspacing="0" height="0" role="presentation" style="table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;width:100%;border-top:2px solid #000;height:0px" valign="top" width="100%">
                                              <tbody>
                                              <tr style="vertical-align:top" valign="top">
                                                  <td height="0" style="word-break:break-word;vertical-align:top;border-collapse:collapse" valign="top"><span></span></td>
                                              </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  
              </div>
          </div>
      </div>
      <div style="background-color:transparent">
          <div style="Margin:0 auto;width:640px;word-wrap:break-word;word-break:break-word;background-color:#fff">
              <div style="border-collapse:collapse;display:table;width:100%;background-color:#fff">
                  
                  
                  <div style="min-width:320px;max-width:320px;display:table-cell;vertical-align:top">
                      <div style="width:100%!important">
                          
                          <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:40px;padding-right:0px;padding-left:50px">
                              
                              
                              <div style="color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:120%;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:50px">
                                  <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif">
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px">Họ
                                tên: {{$infoUser['name_buyer']}}</span></p>
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px"> Điện
                                thoại: {{$infoUser['phone']}} </span></p>
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px">Email: <a href="mailto:{{$infoUser['email']}}" target="_blank">{{$infoUser['email']}}</a> </span></p>
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px">Địa
                                              chỉ:  {{$infoUser['address']}}</span></p>
                                      
                                  </div>
                              </div>
                              
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  
                  <div style="min-width:320px;max-width:320px;display:table-cell;vertical-align:top">
                      <div style="width:100%!important">
                          
                          <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:50px;padding-left:0px">
                              
                              
                              <div style="color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;line-height:120%;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:0px">
                                  <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif">
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px"><strong><span style="line-height:13px;font-size:11px">Phương
                                    thức thanh toán:</span></strong></span></p>
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px">{{$namePayment}}</span></p>
                                      <p style="font-size:14px;line-height:13px;margin:0"><span style="font-size:11px">&nbsp;</span></p>

                                  </div>
                              </div>
                              
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  
              </div>
          </div>
      </div>
  
      
  
  <div style="background-color:transparent">
  <div style="margin:0 auto;min-width:320px;max-width:640px;word-wrap:break-word;word-break:break-word;background-color:#fff">
  <div style="border-collapse:collapse;display:table;width:100%;background-color:#fff">
  
  
  
  <div style="min-width:320px;max-width:640px;display:table-cell;vertical-align:top">
  <div style="width:100%!important">
  
  
  <div style="border:0px solid transparent;padding:0px">
  

  

  </td>
  </tr>
  </tbody>
  </table>

  </div>
  
  
  </div>
  </div>
  
  
  
  </div>
  </div>
  </div>

  </div>
  
  
  </div>
  </div>
  </div>
  </div>
  </div>

  </td>
  </tr>
  </tbody>
  </table>