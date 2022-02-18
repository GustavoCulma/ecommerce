@props(['size' => 35, 'color' => 'gray'])

@php

switch ($color) {
    case 'gray':
        $col = '#374151';
        break;
    case 'white':
        $col = '#ffffff';
        break;

    default:
        $col = '#374151';
        break;
}
@endphp
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{ $size }}" height="{{ $size }}"
    viewBox="0 0 172 172" style=" fill:#000000;">
    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <path d="M0,172v-172h172v172z" fill="none"></path>
        <g fill="#ffffff">
            <path
                d="M11.71123,21.5c-1.1132,0 -2.01562,0.90243 -2.01562,2.01563c0,1.1132 0.90243,2.01563 2.01563,2.01563h12.82008c2.3231,-0.03073 4.31173,1.65943 4.65588,3.95711l11.78471,82.31322c0.63167,4.2869 4.31262,7.46139 8.6458,7.45624h91.69585c4.19272,0.0013 7.79707,-2.97173 8.59331,-7.08815l12.39885,-63.55977c0.10731,-0.59797 -0.03107,-1.21395 -0.38384,-1.70856c-0.39319,-0.5134 -0.98799,-0.83314 -1.6331,-0.8779h-123.18605c-0.82717,0.01762 -1.53889,-0.58147 -1.66263,-1.39952l-2.26233,-15.64734c-0.65154,-4.27929 -4.31793,-7.44961 -8.64645,-7.47658zM38.14072,50.39063c0.00722,-0.00005 0.01443,-0.00005 0.02165,0h117.64177c0.49218,0.00019 0.95732,0.22515 1.26305,0.61086c0.30946,0.39164 0.42676,0.90152 0.31953,1.38902l-11.58984,59.28378c-0.32135,2.22968 -2.23061,3.8855 -4.48332,3.88821h-91.69585c-2.35613,-0.03483 -4.33384,-1.7848 -4.65523,-4.11917l-8.46274,-59.1355c-0.06836,-0.47828 0.07254,-0.96284 0.38671,-1.32989c0.31417,-0.36705 0.77117,-0.58104 1.25427,-0.58732zM40.09926,53.75l8.18848,57.21698c0.09195,0.67641 0.64865,1.19384 1.32997,1.23615h91.69585c0.65687,-0.03929 1.2018,-0.52244 1.31947,-1.16988l11.13384,-57.28325zM46.83507,58.31927c0.86197,-0.03984 1.61391,0.57992 1.73939,1.43364l0.23555,1.58783c0.06496,0.44079 -0.04786,0.88933 -0.31366,1.24692c-0.26579,0.35759 -0.66277,0.59493 -1.10358,0.65978c-0.0817,0.01186 -0.16415,0.01778 -0.2467,0.01772c-0.83247,-0.00087 -1.53871,-0.61136 -1.66,-1.43495l-0.23489,-1.58783c-0.06496,-0.44079 0.04786,-0.88933 0.31366,-1.24692c0.26579,-0.35759 0.66277,-0.59493 1.10358,-0.65978c0.05525,-0.00824 0.11087,-0.01371 0.16666,-0.0164zM125.97656,63.82222c3.43395,0 6.38281,2.79336 6.38281,6.22731v26.96095c0,3.43362 -2.94886,6.22731 -6.38281,6.22731c-3.43395,0 -6.38281,-2.79235 -6.38281,-6.22731v-26.96095c0,-3.43395 2.94886,-6.22731 6.38281,-6.22731zM71.90441,63.83731c3.36016,0.09831 6.03311,2.85062 6.03309,6.21222v26.96095c0,3.43236 -2.78248,6.21484 -6.21484,6.21484c-3.43236,0 -6.21484,-2.78248 -6.21484,-6.21484v-26.96095c-0.00001,-1.6798 0.67997,-3.28807 1.88501,-4.45838c1.20504,-1.17031 2.8325,-1.80297 4.51158,-1.75384zM99.11534,63.83731c3.36016,0.09831 6.03311,2.85062 6.03309,6.21222v26.96095c0,3.43236 -2.78248,6.21484 -6.21484,6.21484c-3.43236,0 -6.21484,-2.78248 -6.21484,-6.21484v-26.96095c-0.00001,-1.6798 0.67997,-3.28807 1.88501,-4.45838c1.20504,-1.17031 2.8325,-1.80297 4.51158,-1.75384zM48.1716,67.14616c0.85372,-0.02118 1.58745,0.6016 1.70528,1.44742l2.75836,18.7272c0.06496,0.44079 -0.04786,0.88933 -0.31366,1.24692c-0.26579,0.35759 -0.66277,0.59493 -1.10358,0.65978c-0.0817,0.01186 -0.16415,0.01778 -0.2467,0.01772c-0.83247,-0.00087 -1.53871,-0.61136 -1.66,-1.43495l-2.75836,-18.7272c-0.07415,-0.47758 0.06101,-0.96397 0.37093,-1.33482c0.30992,-0.37085 0.76457,-0.59024 1.24774,-0.60207zM125.97656,67.18159c-1.58126,0 -3.02344,1.28634 -3.02344,2.86794v26.96095c0,1.58126 1.44218,2.86794 3.02344,2.86794c1.58126,0 3.02344,-1.28668 3.02344,-2.86794v-26.96095c0,-1.58159 -1.44218,-2.86794 -3.02344,-2.86794zM71.63933,67.19537c-1.54389,0.04507 -2.77209,1.30961 -2.77214,2.85416v26.96095c-0.00188,0.75904 0.29796,1.48772 0.83351,2.02561c0.53555,0.53789 1.26292,0.8409 2.02196,0.84233c0.75904,-0.00142 1.4864,-0.30444 2.02196,-0.84233c0.53555,-0.53789 0.83539,-1.26657 0.83351,-2.02561v-26.96095c-0.00003,-0.77175 -0.31244,-1.51063 -0.86606,-2.04831c-0.55362,-0.53768 -1.30131,-0.82837 -2.07274,-0.80585zM98.85026,67.19537c-1.54389,0.04507 -2.77209,1.30961 -2.77214,2.85416v26.96095c-0.00188,0.75904 0.29796,1.48772 0.83351,2.02561c0.53555,0.53789 1.26292,0.8409 2.02196,0.84233c0.75904,-0.00142 1.4864,-0.30444 2.02196,-0.84233c0.53555,-0.53789 0.83539,-1.26657 0.83351,-2.02561v-26.96095c-0.00003,-0.77175 -0.31244,-1.51063 -0.86606,-2.04831c-0.55362,-0.53768 -1.30131,-0.82837 -2.07274,-0.80585zM52.40625,122.61719v5.18144c0.02272,7.66387 5.74437,14.11352 13.35089,15.04961c-0.17043,-1.35075 -0.15365,-2.71855 0.04986,-4.06471c-5.38513,-0.88495 -9.34505,-5.52759 -9.36951,-10.98489v-5.18144zM78.15008,131.52937c-5.14026,0.14876 -9.20829,4.39792 -9.13313,9.53979c0.07516,5.14186 4.26564,9.27031 9.40805,9.26878c5.19255,-0.00574 9.40051,-4.2137 9.40625,-9.40625c0.00002,-2.54238 -1.02911,-4.9765 -2.85292,-6.74777c-1.82381,-1.77128 -4.28696,-2.72885 -6.82825,-2.65454zM145.80409,131.52937c-5.14026,0.14876 -9.20829,4.39792 -9.13313,9.53979c0.07516,5.14186 4.26564,9.27031 9.40805,9.26878c5.19255,-0.00574 9.40051,-4.2137 9.40625,-9.40625c0.00002,-2.54238 -1.02911,-4.9765 -2.85292,-6.74777c-1.82381,-1.77128 -4.28696,-2.72885 -6.82825,-2.65454zM78.59166,135.22337c3.11768,0.09447 5.58287,2.67288 5.53735,5.79166c-0.04552,3.11877 -2.58491,5.62414 -5.70401,5.62759c-3.15261,-0.00352 -5.70742,-2.55833 -5.71094,-5.71094c0.00005,-1.5435 0.62487,-3.02126 1.73212,-4.09662c1.10725,-1.07536 2.60263,-1.65674 4.14547,-1.6117zM146.24567,135.22337c3.11768,0.09447 5.58287,2.67288 5.53735,5.79166c-0.04552,3.11877 -2.58491,5.62414 -5.70401,5.62759c-3.15261,-0.00352 -5.70742,-2.55833 -5.71094,-5.71094c0.00005,-1.5435 0.62487,-3.02126 1.73212,-4.09662c1.10725,-1.07536 2.60263,-1.65674 4.14547,-1.6117zM78.425,138.58012c-1.29873,0 -2.35156,1.05283 -2.35156,2.35156c0,1.29873 1.05283,2.35156 2.35156,2.35156c1.29873,0 2.35156,-1.05283 2.35156,-2.35156c0,-1.29873 -1.05283,-2.35156 -2.35156,-2.35156zM146.07901,138.58012c-1.29873,0 -2.35156,1.05283 -2.35156,2.35156c0,1.29873 1.05283,2.35156 2.35156,2.35156c1.29873,0 2.35156,-1.05283 2.35156,-2.35156c0,-1.29873 -1.05283,-2.35156 -2.35156,-2.35156zM91.0325,139.07813c0.21257,1.33548 0.2108,2.69632 -0.00525,4.03125h42.44951c-0.21605,-1.33493 -0.21782,-2.69577 -0.00525,-4.03125z">
            </path>
        </g>
    </g>
</svg>