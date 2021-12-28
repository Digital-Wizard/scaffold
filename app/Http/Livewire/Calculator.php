<?php

namespace App\Http\Livewire;

use App\Repositories\CostRepository;
use Livewire\Component;

class Calculator extends Component
{
    public $websites;
    public $organizations;

    public $website;
    public $organization;
    public $page;
    public $email;
    public $blog;
    public $ecommerce;
    public $ssl;
    public $cost;


    public function mount()
    {
        $this->websites = CostRepository::websites();
        $this->organizations = CostRepository::organizations();

        $this->page = 0;
        $this->email = 0;

        $this->blog = false;
        $this->ecommerce = false;
        $this->ssl = false;

        $this->cost = 0;
    }

    public function updated()
    {
        $this->cost = 0;

        $website_cost = is_numeric($this->website) ? CostRepository::website($this->website)['cost'] : 0;
        $organization_cost = is_numeric($this->organization) ? CostRepository::organization($this->organization)['cost'] : 0;
        $total_page_cost = CostRepository::costPerPage() * $this->page;
        $total_email_cost = CostRepository::costPerEmail() * $this->email;
        $blog_cost = $this->blog ? CostRepository::costForBlog() : 0;
        $ecommerce_cost = $this->ecommerce ? CostRepository::costForEcommerce() : 0;
        $ssl_cost = $this->ssl ? CostRepository::costForSslCertificate() : 0;

        $this->cost = $website_cost + $organization_cost + $total_page_cost + $total_email_cost + $blog_cost + $ecommerce_cost + $ssl_cost;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
