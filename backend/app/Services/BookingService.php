<?php

namespace App\Services;

class BookingService
{
    /**
     * TODO: Create bookings with availability checks, pricing, and initial folio setup.
     */
    public function createBooking(array $data): void
    {
        // TODO: Implement booking transaction.
    }

    /**
     * TODO: Check whether a room is available for a date range.
     */
    public function isRoomAvailable(int $roomId, string $checkIn, string $checkOut): bool
    {
        // TODO: Query overlapping bookings.
        return false;
    }
}
