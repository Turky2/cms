@php
    $industry = [];
    if(
        isset($page_meta['industry']) && 
        isset($page_meta['industry']['meta_value']) &&
        !empty($page_meta['industry']['meta_value'])
    ) {
        $industry = json_decode($page_meta['industry']['meta_value'], true);
    }
    @endphp
@if(!empty($industry))
    <div class="block-2 p-5 space-between-blocks overflow-hidden">
        <div class="container-xl px-lg-4 px-xl-0 position-relative">
            <div class="row align-items-center mx-auto" id="block__container">
                <div class="position-relative" style="z-index: 2">
                    <h1  class="my-4 text-center my-4 block__title block__title--big mb-4">ميزات لارتفاع 🚀 نمو عملك</h1>
					<div dir="rtl" style="margin-right: 15%;" class=" row text-center col-md-12 ">
<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">الوصول من أي مكان!</h5>
    <p class="card-text">تحقق من بيانات عملك من أي مكان وفي أي وقت. شاهد التحديثات المباشرة في الوقت الفعلي
</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>
<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">لاحاجة لتثبيت برنامج
</h5>
    <p class="card-text"> لا يوجد برنامج لتثبيته، لا تعتمد على الأجهزة. ما عليك سوى فتح المتصفح والبدء في استخدامه.
</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>
<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">الفروع المتعددة والمستودعات</h5>
    <p class="card-text">إدارة مخزون فروع متعددة في مكان واحد دون عناء وفي الوقت الفعلي.
</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>
<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">إدارة الخدمات</h5>
    <p class="card-text">إدارة الخدمات وفوترتها بسهولة. أيضا ميزات مخصصة لإدارة خدمات الإصلاح لجدولة وتقديم الخدمات في الوقت المحدد
</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>

<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">إدارة المخزون
</h5>
    <p class="card-text">قم بإدارة المنتجات من مواقع متعددة، وانتهاء صلاحية المنتج، ورقم الباركود، وتاريخ المنتج، وأكثر من ذلك بكثير.
</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>

<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">إدارة العملاء</h5>
    <p class="card-text">تساعدك وحدة إدارة علاقات العملاء على تتبع دورة حياة العملاء المتوقعين والمتابعة مع العملاء المحتملين والمصادر والمتابعة وحملات الإطلاق والمقترحات وغير ذلك الكثير

</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>
<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">إدارة الموارد البشرية و الحضور و الانصراف
</h5>
    <p class="card-text">مع إدارة الموارد البشرية، يمكنك بسهولة تتبع الحضور اليومي وإدارة المناوبات والإجازات وكشوف المرتبات والعطلات والإدارات والتسميات

</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>

<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">صلاحيات وصول المستخدم</h5>
    <p class="card-text">دور المستخدم الرئيسي وإدارة الأذونات للحد من وصول الموظفين إلى بيانات الأعمال
</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>

<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">التقارير
</h5>
    <p class="card-text">الكثير من التقارير لمساعدة أصحاب الأعمال على تحليل كل الإيرادات والمخزون والمدفوعات والموارد البشرية.

</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>

<div class="card mx-5 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">واجهة مبسطة
</h5>
    <p class="card-text">واجهة سهلة الاستخدام لإنجاز العمل بنقرات قليلة. وفر وقتك واجعل من السهل على الموظفين استخدامها.

</p>
    <a  class="btn btn-primary">اعرف المزيد</a>
  </div>
</div>
               
                </div>
        
            </div>
      
        </div>
    </div>


@endif