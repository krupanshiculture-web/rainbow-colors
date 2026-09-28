<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DistributorInquiry;
use Illuminate\Http\Request;

class DistributorInquiryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $inquiries = DistributorInquiry::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('company', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.distributor-inquiries.index', compact(
            'inquiries',
            'search'
        ));
    }

    public function show(DistributorInquiry $distributorInquiry)
    {
        return view(
            'admin.distributor-inquiries.show',
            compact('distributorInquiry')
        );
    }

    public function destroy(DistributorInquiry $distributorInquiry)
    {
        $distributorInquiry->delete();

        return redirect()
            ->route('admin.distributor-inquiries.index')
            ->with('success', 'Distributor enquiry deleted successfully.');
    }
}
