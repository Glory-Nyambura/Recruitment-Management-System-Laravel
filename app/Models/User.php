<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Application;

#[Fillable(['name', 'email', 'password', 'is_admin', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    /**
     * Determine whether the user is an administrator.
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin' || $this->is_admin === true;
    }

    /**
     * Determine whether the user is a recruiter/employer.
     */
    public function isRecruiter(): bool
    {
        return $this->role === 'recruiter';
    }

    /**
     * Determine whether the user is a job seeker.
     */
    public function isJobSeeker(): bool
    {
        return $this->role === 'jobseeker';
    }

    /**
     * Check whether the user has the given role.
     */
    public function hasRole(string $role): bool
    {
        if ($role === 'admin') {
            return $this->isAdmin();
        }

        return $this->role === $role;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
