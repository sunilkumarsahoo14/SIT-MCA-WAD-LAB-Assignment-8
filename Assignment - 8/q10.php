<?php
// Custom Exception for Missing Data
class MissingDataException extends Exception {
    public function __construct() {
        parent::__construct("Please provide data for all the required variables: card_number, card_exp_date, account_balance, and transaction_amount.");
    }
}

// Custom Exception for Invalid Card Details
class InvalidCardException extends Exception {
    public function __construct() {
        parent::__construct("Transaction failed: Invalid card details. Card number must be 16 digits.");
    }
}

// Custom Exception for Card Expiry
class CardExpiredException extends Exception {
    public function __construct() {
        parent::__construct("Transaction failed: Card has expired.");
    }
}

// Custom Exception for Insufficient Funds
class InsufficientFundsException extends Exception {
    public function __construct() {
        parent::__construct("Transaction failed: Insufficient funds.");
    }
}

// Function to validate and process transaction
function processTransaction($card_number, $card_exp_date, $account_balance, $transaction_amount) {
    // Check if all variables are set
    if (empty($card_number) || empty($card_exp_date) || empty($account_balance) || empty($transaction_amount)) {
        throw new MissingDataException();
    }

    // Validate card number length
    if (strlen($card_number) < 16) {
        throw new InvalidCardException();
    }

    // Validate card expiry
    $current_date = date('Y-m'); // Format: YYYY-MM
    if ($card_exp_date < $current_date) {
        throw new CardExpiredException();
    }

    // Check for sufficient funds
    if ($transaction_amount > $account_balance) {
        throw new InsufficientFundsException();
    }

    // If all validations pass, process the transaction
    echo "Transaction successful! Amount of ₹{$transaction_amount} has been deducted from your account.<br>";
}

try {
    // Variables for transaction details
    $card_number = "1234567812345678"; // Enter your 16-digit card number
    $card_exp_date = "2025-12";        // Enter expiry date in format YYYY-MM
    $account_balance = 5000;          // Enter account balance
    $transaction_amount = 3000;       // Enter transaction amount

    // Process the transaction
    processTransaction($card_number, $card_exp_date, $account_balance, $transaction_amount);
} catch (MissingDataException $e) {
    echo $e->getMessage();
} catch (InvalidCardException $e) {
    echo $e->getMessage();
} catch (CardExpiredException $e) {
    echo $e->getMessage();
} catch (InsufficientFundsException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo "An unexpected error occurred: " . $e->getMessage();
}
?>