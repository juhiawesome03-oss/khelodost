@extends('sports_master')

@section('sports_body')
<style>
  .withdraw-badge {
    background-color: #0c9971;
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    display: inline-block;
    margin-bottom: 20px;
  }

  .withdraw-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin-bottom: 20px;
  }

  .amount-label {
    color: #333;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 12px;
    text-transform: uppercase;
  }

  .amount-input-group {
    margin-bottom: 30px;
  }

  .amount-input-group .form-control {
    border: 1px solid #ddd;
    padding: 12px 15px;
    font-size: 16px;
  }

  .amount-input-group .input-group-text {
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    color: #666;
    font-weight: 500;
  }

  .payment-method-section {
    text-align: center;
    margin-bottom: 30px;
  }

  .payment-method-title {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
  }

  .payment-method-subtitle {
    font-size: 14px;
    color: #888;
  }

  .submit-btn {
    width: 100%;
    background-color: #0c9971;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 14px;
    font-size: 16px;
    font-weight: 600;
  }

  .bottom-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
  }

  .bottom-btn {
    background-color: #0c9971;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 12px 24px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    min-width: 180px;
    text-align: center;
  }

  .breadcrumb-nav {
    color: #0c9971;
    font-weight: 600;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  
  .breadcrumb-nav span:last-child {
    font-size: 16px;
    font-weight: bold;
  }
  
  .breadcrumb-arrow {
    font-size: 18px;
    color: black;
    font-weight: bold;
  }

  @media (max-width: 576px) {
    .bottom-buttons {
      flex-direction: column;
    }
    
    .bottom-btn {
      min-width: 100%;
    }
    
    .withdraw-card {
      padding: 20px;
    }
  }
</style>

<!-- Breadcrumb Navigation -->
<main class="layout-content-center p-3">
<div class="breadcrumb-nav fw-bold">
  <span>🏠</span>
  <span class="breadcrumb-arrow">></span>
  <span>Withdraw</span>
</div>

<!-- Main Withdraw Card -->
<div class="withdraw-card">
  <!-- Available Withdraw Amount Badge -->
  <div class="withdraw-badge">
    Available Withdraw Amount: ₹ 0
  </div>

  <!-- Amount Section -->
  <div class="amount-label">AMOUNT</div>
  
  <div class="input-group amount-input-group">
    <span class="input-group-text">₹</span>
    <input type="number" class="form-control" placeholder="Enter Amount" aria-label="Amount">
    <span class="input-group-text">INR</span>
  </div>

  <!-- Payment Method Section -->
  <div class="payment-method-section">
    <div class="payment-method-title">Select Payment Method</div>
    <div class="payment-method-subtitle">No previous payment methods available.</div>
  </div>

  <!-- Submit Button -->
  <button type="submit" class="submit-btn">Submit</button>
</div>

<!-- Bottom Action Buttons -->
<div class="bottom-buttons">
  <a href="#" class="bottom-btn">Show Withdraw History</a>
  <a href="#" class="bottom-btn">Add Withdraw Method</a>
</div>
</main>
@endsection