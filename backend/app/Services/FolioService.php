<?php

namespace App\Services;

class FolioService
{
    /**
     * TODO: Add charge lines to a booking folio.
     */
    public function addCharge(int $bookingId, array $data): void
    {
        // TODO: Persist folio charge.
    }

    /**
     * TODO: Record payments and update folio balance.
     */
    public function addPayment(int $bookingId, array $data): void
    {
        // TODO: Persist payment and recalculate balance.
    }
}
