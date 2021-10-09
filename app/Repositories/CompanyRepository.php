<?php


namespace App\Repositories;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository implements CompanyRepositoryInterface
{
    /**
     * Get List
     *
     * @param  array $params
     * @return Collection
     */
    public function getList(array $params = []): Collection
    {
        $createdRange = [
            isset($params['created_from']) ? Carbon::parse($params['created_from']) : Carbon::minValue(),
            isset($params['created_to']) ? Carbon::parse($params['created_to']) : Carbon::maxValue(),
        ];

        return Company::select('*')
            // ->join(...)
            ->where(function ($q) use ($params, $createdRange) {
                $q->when(isset($params['name']), fn ($sq) => $sq->where('name', 'LIKE', '%' . $params['name'] . '%'))
                    ->when(isset($params['email']), fn ($sq) => $sq->where('email', 'LIKE', '%' . $params['email'] . '%'))
                    ->when(isset($params['address']), fn ($sq) => $sq->where('address', 'LIKE', '%' . $params['address'] . '%'))
                    ->when(isset($params['website']), fn ($sq) => $sq->where('website', 'LIKE', '%' . $params['website'] . '%'))
                    ->whereBetween('created_at', $createdRange);
            })
            ->orderBy('name')
            ->get();
    }
}
