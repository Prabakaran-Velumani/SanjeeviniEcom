<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('common.document') }}</title>
    <link rel="stylesheet" href="{{asset(asset_path('modules/ordermanage/css/sale_print.css'))}}" />

</head>
<body>
    <div class="invoice_wrapper">
        <!-- invoice print part here -->
        <div class="invoice_print mb_30">
            <div class="container">
                <div class="invoice_part_iner">
                    <!-- middle content  -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                   <!-- single table  -->
                                   <table>
                                       <tbody>
                                           <tr>
                                               <td>
                                                   <h5 class="font_18 mb-0" >{{ __('shipping.shipping_to') }}</h5>
                                               </td>
                                           </tr>
                                           <tr>
                                            {{-- {{$order}} --}}
                                            {{-- {{$customer}} --}}
                                                <td>
                                                    <p class="line_grid_2" >
                                                        {{($order->customer_id) ? @$order->address->shipping_name : @$order->guest_info->shipping_name}}
                                                    </p>
                                                </td>
                                           </tr>
                                           <tr>
                                            <td>
                                                <p class="line_grid_2" >
                                                    {{($order->customer_id) ? $order->address->shipping_address : $order->guest_info->shipping_address}},{{($order->customer_id) ? @$order->address->getShippingCity->name : $order->guest_info->getShippingCity->name}}
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                        <td>
                                            <p class="line_grid_2" >
                                                {{($order->customer_id) ? $order->address->shipping_postcode : $order->guest_info->shipping_postcode}}
                                            </p>
                                        </td>
                                   </tr>
                                       <tr>
                                            <td>
                                                <p class="line_grid_2" >
                                                    {{($order->customer_id) ? @$order->address->getShippingState->name : $order->guest_info->getShippingState->name}}
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td>
                                                <p class="line_grid_2" >
                                                    {{($order->customer_id) ? getNumberTranslate($order->address->shipping_phone) : getNumberTranslate($order->guest_info->shipping_phone)}}
                                                </p>
                                            </td>
                                       </tr>
                                           <tr>
                                                <td>
                                                    <p class="line_grid_2" >
                                                        <span>
                                                            <span>{{ __('common.order_id') }}</span>
                                                            <span>:</span>
                                                        </span>
                                                        {{getNumberTranslate($order->order_number)}}
                                                    </p>
                                                </td>
                                           </tr>

                                           <tr>
                                            <td>
                                                <h5 class="font_18 mb-0" >{{ __('shipping.shipping_from') }}</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_uppercase">
                                               {{app('general_setting')->company_name}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{-- {{$setting}} --}}
                                                <span>
                                                    <span>{{'Return Address'}}</span>
                                                    <span>:</span>
                                                </span>
                                               {{$setting->address}},{{$setting->city->name}},{{$setting->zip_code}},{{$setting->state->name}}
                                            </td>
                                        </tr>
                                       </tbody>
                                   </table>
                                   <!--/ single table  -->
                                </td>
                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- invoice print part end -->
     
      
    </div>


    <script src="{{asset(asset_path('backend/js/jquery.min.js'))}}"></script>
    <script type="text/javascript">
        (function($){
            "use strict";
            $(document).ready(function() {
                window.print();
            });
        })(jQuery);
    </script>
</body>
</html>
