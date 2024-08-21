<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\Plan;
use App\Models\PlanFeature;
use App\Models\Salon;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\Subscription;
use App\Models\SubscriptionPayment;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminApiController extends Controller
{
    // region SERVICE CATEGORIES
    public function getServiceCategories($serviceCategory_id = null)
    {
        try {
            if ($serviceCategory_id == null) {
                $result = ServiceCategory::all();
            } else {
                $result = ServiceCategory::where('id', $serviceCategory_id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getServiceTypesForServiceCategory(ServiceCategory $serviceCategory)
    {
        try {
            $result = ServiceType::where('service_category_id', $serviceCategory->id)->get();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createServiceCategory()
    {
        try {
            request()->validate([
                'service_category' => 'required'
            ]);

            $result = ServiceCategory::create([
                'service_category' => request('service_category'),
                'icon_url' => request('icon_url')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateServiceCategory(ServiceCategory $serviceCategory)
    {
        try {
            request()->validate([
                'service_category' => 'required'
            ]);

            $result = $serviceCategory->update([
                'service_category' => request('service_category'),
                'icon_url' => request('icon_url')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteServiceCategory(ServiceCategory $serviceCategory)
    {
        try {
            $result = $serviceCategory->delete();

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region SERVICE TYPES
    public function getServiceTypes($serviceType_id = null)
    {
        try {
            if ($serviceType_id == null) {
                $result = ServiceType::all();
            } else {
                $result = ServiceType::where('id', $serviceType_id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getServicesForServiceType(ServiceType $serviceType)
    {
        try {
            $result = Service::where('service_type_id', $serviceType->id)->get();
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createServiceType()
    {
        try {
            request()->validate([
                'service_category_id' => 'required',
                'service_type' => 'required'
            ]);

            $result = ServiceType::create([
                'service_type' => request('service_type'),
                'service_category_id' => request('service_category_id'),
                'icon_url' => request('icon_url')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateServiceType(ServiceType $serviceType)
    {
        try {
            request()->validate([
                'service_type' => 'required',
            ]);

            $result = $serviceType->update([
                'service_type' => request('service_type'),
                'icon_url' => request('icon_url')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteServiceType(ServiceType $serviceType)
    {
        try {
            $result = $serviceType->delete();

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region SERVICES
    public function getServices($service_id = null)
    {
        try {
            if ($service_id == null) {
                $result = Service::all();
            } else {
                $result = Service::where('id', $service_id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createService()
    {
        try {
            request()->validate([
                'salon_id' => 'required',
                'service_type_id' => 'required',
                'service_name' => 'required',
                'amount' => 'required',
                'duration' => 'required'
            ]);

            $result = Service::create([
                'salon_id' => request('salon_id'),
                'service_type_id' => request('service_type_id'),
                'service_name' => request('service_name'),
                'amount' => request('amount'),
                'duration' => request('duration')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateService(Service $service)
    {
        try {
            request()->validate([
                'service_type_id' => 'required',
                'service_name' => 'required',
                'amount' => 'required',
                'duration' => 'required'
            ]);

            $result = $service->update([
                'service_type_id' => request('service_type_id'),
                'service_name' => request('service_name'),
                'amount' => request('amount'),
                'duration' => request('duration')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteService(Service $service)
    {
        try {
            $result = $service->delete();

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region PARTNERS
    public function getPartners($partner_id = null)
    {
        try {
            if ($partner_id == null) {
                $result = Partner::all();
            } else {
                $result = Partner::where('id', $partner_id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region SALONS
    public function getSalons($salon_id = null)
    {
        try {
            if ($salon_id == null) {
                $result = Salon::all();
            } else {
                $result = Salon::where('id', $salon_id)->firstOrFail();
            }
            return $result;
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region USERS
    public function getUsers($user_id = null)
    {
        try {
            if ($user_id == null) {
                $result = User::all();
            } else {
                $result = User::where('id', $user_id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region PLANS
    public function getPlans($plan_id = null)
    {
        try {

            return Utils::successResponse(match ($plan_id) {
                null => Plan::all()->values(),
                'all' => Plan::withTrashed()->get(),
                default => Plan::where('id', $plan_id)->firstOrFail(),
            });
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getPlansSorted($field = 'startDate', $orderBy = 'DESC')
    {
        try {
            if ($orderBy == 'DESC') {
                $result = Plan::all()->sortByDesc($field);
            } else {
                $result = Plan::all()->sortBy($field);
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getPlanDeleted($plan_id)
    {
        try {
            return Utils::successResponse(Plan::onlyTrashed()->where('id', $plan_id)->firstOrFail());
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getPlansFiltered($criteria)
    {
        // Need to extend Eloquent ORM for this feature
    }

    public function createPlan()
    {
        try {
            request()->validate([
                'name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'amount' => 'required',
                'currency' => 'required',
                'frequency' => 'required',
                'country' => 'required'
            ]);

            $result = Plan::create([
                'name' => request('name'),
                'start_date' => request('start_date'),
                'end_date' => request('end_date'),
                'amount' => request('amount'),
                'currency' => request('currency'),
                'frequency' => request('frequency'),
                'country' => request('country'),
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updatePlan(Plan $plan)
    {
        try {
            request()->validate([
                'name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'amount' => 'required',
                'currency' => 'required',
                'frequency' => 'required',
                'country' => 'required'
            ]);

            $result = $plan->update([
                'name' => request('name'),
                'start_date' => request('start_date'),
                'end_date' => request('end_date'),
                'amount' => request('amount'),
                'currency' => request('currency'),
                'frequency' => request('frequency'),
                'country' => request('country'),
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deletePlan(Plan $plan)
    {
        try {
            $result = $plan->delete();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region FEATURES
    public function getFeatures($feature_id = null)
    {
        try {

            return Utils::successResponse(match ($feature_id) {
                null => Feature::all()->values(),
                'all' => Feature::withTrashed()->get(),
                default => Feature::where('id', $feature_id)->firstOrFail(),
            });
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getFeatureDeleted($feature_id)
    {
        try {
            return Utils::successResponse(Feature::onlyTrashed()->where('id', $feature_id)->firstOrFail());
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getFeaturesSorted($field = 'startDate', $sortOrder = 'DESC')
    {
        try {
            if ($sortOrder == 'DESC') {
                $result = Feature::all()->sortByDesc($field);
            } else {
                $result = Feature::all()->sortBy($field);
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createFeature()
    {
        try {
            request()->validate([
                'name' => 'required',
            ]);

            $result = Feature::create([
                'name' => request('name'),
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateFeature(Feature $feature)
    {
        try {
            request()->validate([
                'name' => 'required',
            ]);

            $result = $feature->update([
                'name' => request('name'),
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteFeature(Feature $feature)
    {
        try {
            $result = $feature->delete();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region PLAN-FEATURES
    public function getPlanFeatures(int $plan_id)
    {
        try {
            $result = PlanFeature::where('plan_id', $plan_id)->get();
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function assignPlanFeatures()
    {
        try {
            request()->validate([
                'plan_id' => 'required',
                'features' => 'required',
            ]);

            $plan_id = request('plan_id');
            $features = request('features');
            foreach ($features as $feature) {
                $result = PlanFeature::create([
                    'plan_id' => $plan_id,
                    'feature_id' => $feature
                ]);
            }
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deletePlanFeatures()
    {
        try {
            request()->validate([
                'plan_id' => 'required',
                'planFeatures' => 'required'
            ]);

            $plan_id = request('plan_id');
            $planFeatures = request('planFeatures');
            foreach ($planFeatures as $planFeature) {
                $result = PlanFeature::where(['plan_id' => $plan_id, 'feature_id' => $planFeature])->firstOrFail()->delete();
            }
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region SUBSCRIPTIONS
    public function getSubscriptions(int $subscription_id = null)
    {
        try {

            return Utils::successResponse(match ($subscription_id) {
                null => Subscription::all()->values(),
                'all' => Subscription::withTrashed()->get(),
                default => Subscription::where('id', $subscription_id)->firstOrFail(),
            });
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSubscriptionsSorted($field = 'startDate', $orderBy = 'DESC')
    {
        try {
            if ($orderBy == 'DESC') {
                $result = Subscription::all()->sortByDesc($field);
            } else {
                $result = Subscription::all()->sortBy($field);
            }
            return $result;
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createSubscription()
    {
        try {
            request()->validate([
                'plan_id' => 'required',
                'salon_id' => 'required',
                'start_date' => 'required',
            ]);

            $result = Subscription::create([
                'plan_id' => request('plan_id'),
                'salon_id' => request('salon_id'),
                'start_date' => request('start_date'),
                'end_date' => request('end_date'),
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateSubscription(Subscription $subscription)
    {
        try {
            request()->validate([
                'plan_id' => 'required',
                'salon_id' => 'required',
                'start_date' => 'required',
            ]);

            $result = $subscription->update([
                'plan_id' => request('plan_id'),
                'salon_id' => request('salon_id'),
                'start_date' => request('start_date'),
                'end_date' => request('end_date'),
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteSubscription(Subscription $subscription)
    {
        try {
            $result = $subscription->delete();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region SUBSCRIPTION PAYMENTS
    public function getSubscriptionPayments(int $subscription_id, int $payment_id = null)
    {
        try {
            if ($payment_id == null) {
                $result = SubscriptionPayment::where('subscription_id', $subscription_id)->get();
            } else {
                $result = SubscriptionPayment::where(['subscription_id' => $subscription_id, 'id' => $payment_id])->get();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSubscriptionPaymentsBySalon(int $salon_id)
    {
        try {
            $result = SubscriptionPayment::where('salon_id', $salon_id)->get();
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createSubscriptionPayment()
    {
        try {
            request()->validate([
                'salon_id' => 'required',
                'subscription_id' => 'required',
                'amount' => 'required',
                'payment_on' => 'required'
            ]);
            $result = SubscriptionPayment::create([
                'salon_id' => request('salon_id'),
                'subscription_id' => request('subscription_id'),
                'amount' => request('amount'),
                'payment_on' => request('payment_on')
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateSubscriptionPayment(SubscriptionPayment $payment)
    {
        try {
            request()->validate([
                'salon_id' => 'required',
                'subscription_id' => 'required',
                'amount' => 'required',
                'payment_on' => 'required'
            ]);

            $result = $payment->update([
                'salon_id' => request('salon_id'),
                'subscription_id' => request('subscription_id'),
                'amount' => request('amount'),
                'payment_on' => request('payment_on')
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteSubscriptionPayment(SubscriptionPayment $payment)
    {
        try {
            $result = $payment->delete();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion    
}
