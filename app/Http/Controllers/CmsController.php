<?php

// namespace Modules\Cms\Http\Controllers;
namespace App\Http\Controllers ;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\CmsPage;
use App\Models\CmsSiteDetail;
use App\Notifications\NewLeadGeneratedNotification;
use App\Utils\CmsUtil;
use Notification;

class CmsController extends Controller
{
    /**
     * All Utils instance.
     */
    protected $cmsUtil;

    /**
     * Constructor
     *
     * @param  ProductUtils  $product
     * @return void
     */
    public function __construct(CmsUtil $cmsUtil)
    {
        $this->cmsUtil = $cmsUtil;
    }

    
    public function index()
    {
        $testimonials = $this->cmsUtil->getPageByType('testimonial');
        $page = $this->cmsUtil->getPageByLayout('home');
        $faqs = CmsSiteDetail::getValue('faqs');
        $statistics = CmsSiteDetail::getValue('statistics');
   
        return view('new.index') ;
    }

    public function index2()
    {
        $testimonials = $this->cmsUtil->getPageByType('testimonial');
        $page = $this->cmsUtil->getPageByLayout('home');
        $faqs = CmsSiteDetail::getValue('faqs');
        $statistics = CmsSiteDetail::getValue('statistics');

        return view('frontend.pages.home')
            ->with(compact(
                'testimonials',
                 'faqs',
                  'statistics',
                   'page'
                   )
                );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function getBlogList()
    {
        $blogs = CmsPage::where('type', 'blog')
                    ->orderBy('priority', 'asc')
                    ->where('is_enabled', 1)
                    ->get();

        return view('frontend.blogs.index2')
            ->with(compact('blogs'));
    }

    public function viewBlog(Request $request)
    {
        $id = $this->cmsUtil->findIdFromGivenUrl($request->url());

        $blog = CmsPage::where('type', 'blog')
                    ->where('is_enabled', 1)
                    ->findOrFail($id);

        return view('frontend.blogs.show')
            ->with(compact('blog'));
    }

    public function contactUs(Request $request)
    {
        $page = $this->cmsUtil->getPageByLayout('contact');

        return view('new.contact')
            ->with(compact('page'));
    }

    public function package(){
        return view('new.package');
    }

    public function contactUs2(Request $request)
    {
        $page = $this->cmsUtil->getPageByLayout('contact');

        return view('frontend.pages.contact_us')
            ->with(compact('page'));
    }

    public function postContactForm(Request $request)
    {
        //check if app is in demo & disable action
        $notAllowedInDemo = $this->cmsUtil->notAllowedInDemo();
        if (! empty($notAllowedInDemo)) {
            return $notAllowedInDemo;
        }

        if ($request->ajax()) {
            try {
                $lead_details = $request->only(['name', 'mobile', 'email', 'message']);

                $recipient = CmsSiteDetail::getValue('notifiable_email');

                if (! empty($recipient) && ! empty($lead_details['message'])) {
                    Notification::route('mail', $recipient)
                        ->notify(new NewLeadGeneratedNotification($lead_details));
                }

                $output = [
                    'success' => true,
                    'msg' => __('lang.we_will_contact_soon'),
                ];
            } catch (Exception $e) {
                \Log::emergency('File:'.$e->getFile().'Line:'.$e->getLine().'Message:'.$e->getMessage());
                $output = [
                    'success' => false,
                    'msg' => __('messages.something_went_wrong'),
                ];
            }

            return $output;
        }
    }
}
