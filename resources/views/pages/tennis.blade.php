@extends('sports_master')

@section('sports_body')
<main class="container py-3">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered text-center mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="text-start" style="min-width: 200px;">🎾 Tennis</th>
                            <th style="width: 20%">1</th>
                            <th style="width: 20%">X</th>
                            <th style="width: 20%">2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start px-3">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 text-nowrap">
                                        <div>Today</div>
                                        <div>3:00 PM</div>
                                    </div>
                                    <div class="vr mx-3 d-none d-sm-block"></div>
                                    <div class="flex-grow-1 text-truncate">
                                        <div>India</div>
                                        <div>Australia</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">1.85</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">3.20</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">2.10</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-start px-3">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 text-nowrap">
                                        <div>Today</div>
                                        <div>5:30 PM</div>
                                    </div>
                                    <div class="vr mx-3 d-none d-sm-block"></div>
                                    <div class="flex-grow-1 text-truncate">
                                        <div>USA</div>
                                        <div>France</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">2.00</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">3.50</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">1.90</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-start px-3">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 text-nowrap">
                                        <div>Today</div>
                                        <div>5:30 PM</div>
                                    </div>
                                    <div class="vr mx-3 d-none d-sm-block"></div>
                                    <div class="flex-grow-1 text-truncate">
                                        <div>Spain</div>
                                        <div>Germany</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">1.70</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">3.00</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Betting odds">
                                    <a href="#" class="btn btn-info">2.30</a>
                                    <a href="#" class="btn btn-danger">Bet</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
