namespace App\Mail;
<?php
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeaveStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $leave;
    public $status;

    public function __construct($leave, $status)
    {
        $this->leave = $leave;
        $this->status = $status;
    }

    public function build()
    {
        return $this->subject("Leave " . $this->status)
                    ->view('emails.leave_status')
                    ->with([
                        'employeeName' => $this->leave->employee->first_name,
                        'leaveType' => $this->leave->leave_type,
                        'status' => $this->status,
                    ]);
    }
}
